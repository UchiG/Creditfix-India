<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc25ab1c6aa9a9ada57fa862728f0c159
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Leadin\\AssetsManager' => __DIR__ . '/../..' . '/public/class-assetsmanager.php',
        'Leadin\\Leadin' => __DIR__ . '/../..' . '/public/class-leadin.php',
        'Leadin\\PageHooks' => __DIR__ . '/../..' . '/public/class-pagehooks.php',
        'Leadin\\admin\\AdminConstants' => __DIR__ . '/../..' . '/public/admin/class-adminconstants.php',
        'Leadin\\admin\\Connection' => __DIR__ . '/../..' . '/public/admin/class-connection.php',
        'Leadin\\admin\\DeactivationForm' => __DIR__ . '/../..' . '/public/admin/class-deactivationform.php',
        'Leadin\\admin\\Gutenberg' => __DIR__ . '/../..' . '/public/admin/class-gutenberg.php',
        'Leadin\\admin\\IframeRoutes' => __DIR__ . '/../..' . '/public/admin/class-iframeroutes.php',
        'Leadin\\admin\\Impact' => __DIR__ . '/../..' . '/public/admin/class-impact.php',
        'Leadin\\admin\\LeadinAdmin' => __DIR__ . '/../..' . '/public/admin/class-leadinadmin.php',
        'Leadin\\admin\\Links' => __DIR__ . '/../..' . '/public/admin/class-links.php',
        'Leadin\\admin\\MenuConstants' => __DIR__ . '/../..' . '/public/admin/class-menuconstants.php',
        'Leadin\\admin\\NoticeManager' => __DIR__ . '/../..' . '/public/admin/class-noticemanager.php',
        'Leadin\\admin\\PluginActionsManager' => __DIR__ . '/../..' . '/public/admin/class-pluginactionsmanager.php',
        'Leadin\\admin\\ReviewBanner' => __DIR__ . '/../..' . '/public/admin/class-reviewbanner.php',
        'Leadin\\admin\\ReviewController' => __DIR__ . '/../..' . '/public/admin/class-reviewcontroller.php',
        'Leadin\\admin\\Routing' => __DIR__ . '/../..' . '/public/admin/class-routing.php',
        'Leadin\\admin\\api\\Hublet_Api_Controller' => __DIR__ . '/../..' . '/public/admin/modules/api/class-hublet-api-controller.php',
        'Leadin\\admin\\api\\Internal_Tracking_Api_Controller' => __DIR__ . '/../..' . '/public/admin/modules/api/class-internal-tracking-api-controller.php',
        'Leadin\\admin\\api\\Portal_Api_Controller' => __DIR__ . '/../..' . '/public/admin/modules/api/class-portal-api-controller.php',
        'Leadin\\admin\\api\\User_Meta_Api_Controller' => __DIR__ . '/../..' . '/public/admin/modules/api/class-user-meta-api-controller.php',
        'Leadin\\admin\\client\\Contacts_Api_Client' => __DIR__ . '/../..' . '/public/admin/modules/client/class-contacts-api-client.php',
        'Leadin\\admin\\widgets\\ElementorForm' => __DIR__ . '/../..' . '/public/admin/widgets/class-elementorform.php',
        'Leadin\\admin\\widgets\\ElementorFormSelect' => __DIR__ . '/../..' . '/public/admin/widgets/class-elementorformselect.php',
        'Leadin\\admin\\widgets\\ElementorMeeting' => __DIR__ . '/../..' . '/public/admin/widgets/class-elementormeeting.php',
        'Leadin\\admin\\widgets\\ElementorMeetingSelect' => __DIR__ . '/../..' . '/public/admin/widgets/class-elementormeetingselect.php',
        'Leadin\\api\\Base_Api_Controller' => __DIR__ . '/../..' . '/public/modules/api/class-base-api-controller.php',
        'Leadin\\api\\Healthcheck_Api_Controller' => __DIR__ . '/../..' . '/public/modules/api/class-healthcheck-api-controller.php',
        'Leadin\\api\\OAuth_Api_Controller' => __DIR__ . '/../..' . '/public/modules/api/class-oauth-api-controller.php',
        'Leadin\\api\\Proxy_Api_Controller' => __DIR__ . '/../..' . '/public/modules/api/class-proxy-api-controller.php',
        'Leadin\\auth\\OAuth' => __DIR__ . '/../..' . '/public/auth/class-oauth.php',
        'Leadin\\auth\\OAuthCrypto' => __DIR__ . '/../..' . '/public/auth/class-oauthcrypto.php',
        'Leadin\\client\\Access_Token_Api_Client' => __DIR__ . '/../..' . '/public/modules/client/class-access-token-api-client.php',
        'Leadin\\client\\HubSpot_Base_Api_Client' => __DIR__ . '/../..' . '/public/modules/client/class-hubspot-base-api-client.php',
        'Leadin\\data\\Filters' => __DIR__ . '/../..' . '/public/data/class-filters.php',
        'Leadin\\data\\Portal_Options' => __DIR__ . '/../..' . '/public/data/class-portal-options.php',
        'Leadin\\data\\User' => __DIR__ . '/../..' . '/public/data/class-user.php',
        'Leadin\\data\\User_Metadata' => __DIR__ . '/../..' . '/public/data/class-user-metadata.php',
        'Leadin\\utils\\QueryParameters' => __DIR__ . '/../..' . '/public/utils/class-queryparameters.php',
        'Leadin\\utils\\RequestUtils' => __DIR__ . '/../..' . '/public/utils/class-requestutils.php',
        'Leadin\\utils\\ShortcodeRenderUtils' => __DIR__ . '/../..' . '/public/utils/class-shortcoderenderutils.php',
        'Leadin\\utils\\Versions' => __DIR__ . '/../..' . '/public/utils/class-versions.php',
        'Leadin\\wp\\FileSystem' => __DIR__ . '/../..' . '/public/wp/class-filesystem.php',
        'Leadin\\wp\\Page' => __DIR__ . '/../..' . '/public/wp/class-page.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc25ab1c6aa9a9ada57fa862728f0c159::$classMap;

        }, null, ClassLoader::class);
    }
}
