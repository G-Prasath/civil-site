<?php


# ------------------
# Create a campaign
# ------------------
# Include the Brevo library
require_once(__DIR__ . "/APIv3-php-library/autoload.php");
# Instantiate the client
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey("api-key", "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");
$api_instance = new Sendinblue\Client\Api\EmailCampaignsApi();
$emailCampaigns = new \Sendinblue\Client\Model\CreateEmailCampaign();
# Define the campaign settings
$email_campaigns['name'] = "Campaign sent via the API";
$email_campaigns['subject'] = "My subject";
$email_campaigns['sender'] = array("guruprasath", "guruprasathmsc@gmail.com");
$email_campaigns['type'] = "classic";
# Content that will be sent
"htmlContent" "Congratulations! You successfully sent this example campaign via the Brevo API.",
# Select the recipients
"recipients"array("listIds"=> [2, 7]),
# Schedule the sending in one hour
"scheduledAt" "2018-01-01 00:00:01"
);
# Make the call to the client
try {
$result = $api_instance->createEmailCampaign($emailCampaigns);
print_r($result);
} catch (Exception $e) {
echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}






?>