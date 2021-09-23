<?php

	//application details
		$apps[$x]['name'] = "SMS";
		$apps[$x]['uuid'] = "f1381f06-1d33-11e6-b6ba-3e1d05defe78";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "SMS";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = "sms_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "d4278820-1d33-11e6-b6ba-3e1d05defe78";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_enabled";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_broadcast_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_broadcast_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "sms_broadcast_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;


	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '67511e2d-35e1-4f70-80ac-4265ec39d2fe';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'flowroute';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '22bcf947-b634-4849-aaec-dd0635ca6f16';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'teli';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '27b5c0a4-b824-4e51-aadd-9a19023202cc';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'twilio';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5c8cea06-edb7-4092-bbdd-7fdc89f02eb0';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'plivo';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'deda7f98-f627-49bb-8a1b-899e4512e7ff';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'bandwidth';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '3eb1a09b-3206-46f6-b9e5-e6074874caaa';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'bulksolutions';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd1e19c12-fdb8-4dfa-b21b-213250bf4b7b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'peerlees';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '0471de4f-6706-435c-a5b1-9f1f768a8106';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'thinq';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
        $apps[$x]['default_settings'][$y]['default_setting_uuid'] = '9b36edac-eeac-4a3e-b8d4-664962e3f78c';
        $apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
        $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
        $apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
        $apps[$x]['default_settings'][$y]['default_setting_value'] = 'telnyx';
        $apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
        $apps[$x]['default_settings'][$y]['default_setting_description'] = '';
        $y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd1e19c12-fdb8-4dfa-b21b-213250bf4b7b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'carriers';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'peerlees';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'e997203c-ca48-45b4-828d-e347ff66fa7c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'twilio_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://api.twilio.com/2010-04-01/Accounts/{ACCOUNTSID}/Messages.json';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '957b31ab-bc8e-4bff-8366-59f17e658550';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'plivo_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://api.plivo.com/v1/Account/{ACCOUNTID}/Message/';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ed6cd4a7-9f89-4156-9591-313b9a73bcfa';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'flowroute_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://api.flowroute.com/v2/messages';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '535e7884-d8af-4c61-967c-cc2a2ebfb6a3';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'teli_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://sms.teleapi.net/sms/send';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5c8a66d1-f8ae-4adc-9056-443cc53bac16';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bandwidth_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://api.catapult.inetwork.com/v1/users/{userId}/messages';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'bed3832d-7f03-4648-955b-b00d7033be24';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'thinq_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://api.thinq.com/account/{ACCOUNT}/product/origination/sms/send';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '2f246db7-eb07-4c2c-a752-e81466276c89';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'telnyx_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://sms.telnyx.com/messages';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '53c99271-965d-42b0-b6fd-ae25f5bd42e0';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bulksolutions_api_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'https://portal.bulkvs.com/api/v1.0/messageSend';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '14101c26-c3f9-46aa-a67a-3642752e56f4';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'flowroute_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '6fd7b4b0-ed90-4aea-9666-919e1b9b4e35';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'flowroute_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '2c2a1671-9213-4f2e-8254-a47cda4e7b05';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'peerless_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '24bf5a19-947a-4b82-8888-1657773aca12';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'peerless_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '551b3948-8328-42be-a873-9a32f8b49463';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'teli_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c7607430-1b55-41ff-934e-7f9142b29df0';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'teli_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c56042fc-4cd4-425b-a39a-9297aaed7743';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'twilio_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '784196cb-d012-4a74-8183-4fc0b738c06a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'twilio_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '4a86c939-9d80-4da7-bbda-49d6bf1c3882';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bandwidth_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '0af3ff85-b325-4b67-b838-e8a85a8cbc0d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bandwidth_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ed232b43-5bf7-4ef5-8cf2-8b9c96028c29';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'thinq_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'cc4725d7-66e4-4ee8-ae95-475b8903ba91';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'thinq_username';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '604c1f7c-e830-441d-9596-31c8d091f8c2';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'telnyx_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'abcd3f80-71c2-4b58-ae9d-3a37cb503faf';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'telnyx_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'cede4bca-e855-4191-a14c-6f69b3aefb2e';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'telnyx_delivery_status_webhook_url';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '2c2a1671-9213-4f2e-8254-a47cda4e7b05';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'peerless_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '24bf5a19-947a-4b82-8888-1657773aca12';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'peerless_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5071f799-a56d-43b0-9caf-c9371f0b7ad1';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bulksolutions_access_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'abcd3f80-71c2-4b58-ae9d-3a37cb503faf';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bulksolutions_secret_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c6358f2b-96f9-45df-bd0f-2e9464474a8e';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'sms';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'mms_attachment_temp_path';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_sms_messages";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_message_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "extension_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_stamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "from_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "to_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "direction";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "response";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "carrier";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;

		$y=1;
		$apps[$x]['db'][$y]['table']['name'] = "v_sms_destinations";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_destination_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "carrier";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "chatplan_detail_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "email";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;

		$y=2;
		$apps[$x]['db'][$y]['table']['name'] = "v_sms_broadcast";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_broadcast_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_broadcast_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "sms_broadcast_description";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "broadcast_desc";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_stamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "timestamp";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_broadcast_caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_broadcast_phone_numbers";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sms_broadcast_destination_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "response";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;

?>
