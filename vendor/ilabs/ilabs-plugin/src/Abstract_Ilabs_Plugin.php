<?php

declare (strict_types=1);
/**
 * @version 1.0.9
 */
namespace Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin;

use Exception;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Event_Chain\Event_Chain;
use Isolated\Omnibus_By_Ilabs\Ilabs\Ilabs_Plugin\Presentation\Form_Chain\Form_Builder;
//boilerplate main class
abstract class Abstract_Ilabs_Plugin
{
    use Tools, Environment;
    private static $config;
    /**
     * @var self
     */
    public static $initial_instance;
    /**
     * @param array $config
     *
     * @return void
     * @throws Exception
     */
    public function execute(array $config)
    {
        if (!\function_exists('get_plugin_data')) {
            $this->require_wp_core_file('wp-admin/includes/plugin.php');
        }
        self::$config = $config;
        if (!self::$initial_instance) {
            self::$initial_instance = $this;
        }
        $this->init_request();
        $this->init_translations();
        $this->before_init();
        add_action('init', function () {
            $this->enqueue_scripts();
            $this->init();
        });
        add_action('plugins_loaded', function () use($config) {
            $this->plugins_loaded_hooks();
        });
    }
    private function init_request()
    {
        $request = new Request();
        $request->register_request_filter(new Security_Request_Filter());
        foreach ($this->register_request_filters() as $filter) {
            $request->register_request_filter($filter);
        }
        $request->build();
    }
    /**
     * @return Request_Filter_Interface[]
     */
    protected function register_request_filters() : array
    {
        return [];
    }
    /**
     * @return void
     * @throws Exception
     */
    private function init_translations()
    {
        $lang_dir = $this->get_from_config('lang_dir');
        add_action('plugins_loaded', function () use($lang_dir) {
            load_plugin_textdomain($this->get_text_domain(), \false, $this->get_plugin_basename() . "/{$lang_dir}/");
        });
    }
    protected abstract function before_init();
    private function enqueue_scripts()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue_dashboard_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_scripts']);
    }
    protected abstract function plugins_loaded_hooks();
    /**
     * @return Request
     */
    public function get_request() : Request
    {
        return new Request();
    }
    /**
     * @return Alerts
     */
    public function alerts() : Alerts
    {
        return new Alerts();
    }
    public function get_event_chain() : Event_Chain
    {
        return new Event_Chain($this);
    }
    public function get_form_builder() : Form_Builder
    {
        return new Form_Builder($this);
    }
    public function add_slug_prefix(string $text) : string
    {
        return $this->get_from_config('slug') . '_' . $text;
    }
    public abstract function enqueue_frontend_scripts();
    public abstract function enqueue_dashboard_scripts();
}
