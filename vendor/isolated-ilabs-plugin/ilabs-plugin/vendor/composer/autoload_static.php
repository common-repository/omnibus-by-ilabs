<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdea3cec9844de85676826f5dd687e69a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\' => 45,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Abstract_Ilabs_Plugin' => __DIR__ . '/../..' . '/src/Abstract_Ilabs_Plugin.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Alerts' => __DIR__ . '/../..' . '/src/Alerts.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Common\\Wc_Helpers' => __DIR__ . '/../..' . '/src/Common/Wc_Helpers.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Environment' => __DIR__ . '/../..' . '/src/Environment.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Abstracts\\Abstract_Action' => __DIR__ . '/../..' . '/src/Event_Chain/Abstracts/Abstract_Action.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Abstracts\\Abstract_Condition' => __DIR__ . '/../..' . '/src/Event_Chain/Abstracts/Abstract_Condition.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Abstracts\\Abstract_Event' => __DIR__ . '/../..' . '/src/Event_Chain/Abstracts/Abstract_Event.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Action\\Action' => __DIR__ . '/../..' . '/src/Event_Chain/Action/Action.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Action\\Copy' => __DIR__ . '/../..' . '/src/Event_Chain/Action/Copy.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Action\\Output_Template' => __DIR__ . '/../..' . '/src/Event_Chain/Action/Output_Template.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Cache' => __DIR__ . '/../..' . '/src/Event_Chain/Cache.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\Is_Admin' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/Is_Admin.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Is_Frontend' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Is_Frontend.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Is_Not_Ajax' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Is_Not_Ajax.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Is_Product' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Is_Product.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Is_Shop' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Is_Shop.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Request_Key_Exist' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Request_Key_Exist.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Condition\\When_Request_Value_Equals' => __DIR__ . '/../..' . '/src/Event_Chain/Condition/When_Request_Value_Equals.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\On' => __DIR__ . '/../..' . '/src/Event_Chain/Event/On.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Save_Post' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Save_Post.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Save_Wc_Order_Post' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Save_Wc_Order_Post.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Add_To_Cart' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Add_To_Cart.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Before_Checkout_Form' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Before_Checkout_Form.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Before_Settings' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Before_Settings.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Before_Shop_Loop_Item' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Before_Shop_Loop_Item.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Before_Single_Product' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Before_Single_Product.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Checkout_Page' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Checkout_Page.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Checkout_Update_Order_Meta' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Checkout_Update_Order_Meta.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Filter_Price_Html' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Filter_Price_Html.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Loaded' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Loaded.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_New_Order' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_New_Order.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Order_Status_Changed' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Order_Status_Changed.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Product_Options_General_Product_Data' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Product_Options_General_Product_Data.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Product_Options_Pricing' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Product_Options_Pricing.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Product_Update' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Product_Update.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Remove_Cart_Item' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Remove_Cart_Item.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Variation_Create' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Variation_Create.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wc_Variation_Update' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wc_Variation_Update.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Admin_Footer' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Admin_Footer.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Admin_Init' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Admin_Init.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Ajax' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Ajax.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Cron_Every_N_Minutes' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Cron_Every_N_Minutes.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Footer' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Footer.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event\\Wp_Init' => __DIR__ . '/../..' . '/src/Event_Chain/Event/Wp_Init.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event_Chain' => __DIR__ . '/../..' . '/src/Event_Chain/Event_Chain.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Event_Chain_Item' => __DIR__ . '/../..' . '/src/Event_Chain/Event_Chain_Item.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Action_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Action_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Cache_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Cache_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Condition_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Condition_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Event_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Event_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Filterable_String_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Filterable_String_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Group_Interface_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Group_Interface_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Post_Readable_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Post_Readable_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Post_Writable_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Post_Writable_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Readable_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Readable_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Wc_Cart_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Wc_Cart_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Wc_Order_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Wc_Order_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Wc_Product_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Wc_Product_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Wc_Variation_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Wc_Variation_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Wp_Post_Id_Aware_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Wp_Post_Id_Aware_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Interfaces\\Writable_Interface' => __DIR__ . '/../..' . '/src/Event_Chain/Interfaces/Writable_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Storage\\Readable\\Option' => __DIR__ . '/../..' . '/src/Event_Chain/Storage/Readable/Option.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Storage\\Readable\\Readable_Post_Meta' => __DIR__ . '/../..' . '/src/Event_Chain/Storage/Readable/Readable_Post_Meta.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Storage\\Writable\\Option' => __DIR__ . '/../..' . '/src/Event_Chain/Storage/Writable/Option.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Storage\\Writable\\Writable_Post_Meta' => __DIR__ . '/../..' . '/src/Event_Chain/Storage/Writable/Writable_Post_Meta.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Traits\\Actions' => __DIR__ . '/../..' . '/src/Event_Chain/Traits/Actions.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Traits\\Conditions' => __DIR__ . '/../..' . '/src/Event_Chain/Traits/Conditions.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Traits\\Events' => __DIR__ . '/../..' . '/src/Event_Chain/Traits/Events.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Wc_Session_Cache' => __DIR__ . '/../..' . '/src/Event_Chain/Wc_Session_Cache.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Event_Chain\\Wp_Options_Based_Cache' => __DIR__ . '/../..' . '/src/Event_Chain/Wp_Options_Based_Cache.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Helper\\Core' => __DIR__ . '/../..' . '/src/Helper/Core.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Logger\\Logger_Interface' => __DIR__ . '/../..' . '/src/Logger/Logger_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Logger\\Null_Logger' => __DIR__ . '/../..' . '/src/Logger/Null_Logger.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Logger\\Wp_Debug_Logger' => __DIR__ . '/../..' . '/src/Logger/Wp_Debug_Logger.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Logger\\Wp_Options_Logger' => __DIR__ . '/../..' . '/src/Logger/Wp_Options_Logger.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Abstract_Form_Handler' => __DIR__ . '/../..' . '/src/Presentation/Form/Abstract_Form_Handler.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Abstract_Group_Walker' => __DIR__ . '/../..' . '/src/Presentation/Form/Abstract_Group_Walker.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Abstract_Renderer' => __DIR__ . '/../..' . '/src/Presentation/Form/Abstract_Renderer.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Ajax_Request_Group_Extractor' => __DIR__ . '/../..' . '/src/Presentation/Form/Ajax_Request_Group_Extractor.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Basic_Ajax_Submit' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Basic_Ajax_Submit.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Checkbox' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Checkbox.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Group' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Group.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Number' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Number.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Select' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Select.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Text' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Text.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Fields\\Text_Area' => __DIR__ . '/../..' . '/src/Presentation/Form/Fields/Text_Area.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Form' => __DIR__ . '/../..' . '/src/Presentation/Form/Form.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Form_Handler_Post_Meta' => __DIR__ . '/../..' . '/src/Presentation/Form/Form_Handler_Post_Meta.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Form_Handler_Request' => __DIR__ . '/../..' . '/src/Presentation/Form/Form_Handler_Request.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Form_Handler_Wp_Options' => __DIR__ . '/../..' . '/src/Presentation/Form/Form_Handler_Wp_Options.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Helpers' => __DIR__ . '/../..' . '/src/Presentation/Form/Helpers.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Interfaces' => __DIR__ . '/../..' . '/src/Presentation/Form/Interfaces.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form\\Request_Group_Extractor' => __DIR__ . '/../..' . '/src/Presentation/Form/Request_Group_Extractor.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form_Chain\\Form_Builder' => __DIR__ . '/../..' . '/src/Presentation/Form_Chain/Form_Builder.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Form_Chain\\Traits\\Fields' => __DIR__ . '/../..' . '/src/Presentation/Form_Chain/Traits/Fields.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Ajax_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Ajax_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Checkbox_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Checkbox_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Decimal_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Decimal_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Number_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Number_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Select_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Select_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Text_Area_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Text_Area_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Field_Text_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Field_Text_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Form_Handler_Inteface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Form_Handler_Inteface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Group_Ajax' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Group_Ajax.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Group_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Group_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Interfaces\\Group_Item_Interface' => __DIR__ . '/../..' . '/src/Presentation/Interfaces/Group_Item_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Event_Chain\\Actions\\Action_Wc_render_Metabox' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Event_Chain/Actions/Action_Wc_render_Metabox.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Event_Chain\\Actions\\Action_Wc_render_Settings_Page' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Event_Chain/Actions/Action_Wc_render_Settings_Page.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Field' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Field.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Form_Chain\\Renderer_Wc_General_Settings' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Form_Chain/Renderer_Wc_General_Settings.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Form_Chain\\Renderer_Wc_Post_Metabox' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Form_Chain/Renderer_Wc_Post_Metabox.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Form_Chain\\Walker_Wc_General_Settings' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Form_Chain/Walker_Wc_General_Settings.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Form_Chain\\Walker_Wc_Post_Metabox' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Form_Chain/Walker_Wc_Post_Metabox.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Form_Chain\\Wc_General_Settings_Child' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Form_Chain/Wc_General_Settings_Child.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Presentation\\Woocommerce\\Meta_Box' => __DIR__ . '/../..' . '/src/Presentation/Woocommerce/Meta_Box.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Request' => __DIR__ . '/../..' . '/src/Request.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Request_Filter_Interface' => __DIR__ . '/../..' . '/src/Request_Filter_Interface.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Response' => __DIR__ . '/../..' . '/src/Response.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Security_Request_Filter' => __DIR__ . '/../..' . '/src/Security_Request_Filter.php',
        'Isolated\\Omnibus_By_Ilabs\\Ilabs\\Ilabs_Plugin\\Tools' => __DIR__ . '/../..' . '/src/Tools.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdea3cec9844de85676826f5dd687e69a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdea3cec9844de85676826f5dd687e69a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdea3cec9844de85676826f5dd687e69a::$classMap;

        }, null, ClassLoader::class);
    }
}
