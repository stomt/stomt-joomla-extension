# STOMT Joomla Extension

How to integrate STOMT on your JOOMLA website?

## Installation

1. Download the ziped file.


3. Open the joomla administrator page, choose "Extension" and then "Manage".

4. Upload the Ziped folder "stomt.zip" 

5. Go again to "Extenstion", "plugins", then choose "System - STOMT" .

6. Click on it, enable it,add the app-id, choose the position,text color,background color .... then save.

....Now it should work.

### options
The `options` param can be configured into the admin-panel to initialize the widget.

| Property | Type | Description |
| :--- | :--- | :--- |
| `appId` _(required)_ | String | The `appId` is your pages application id. You can find it in your application overview in STOMT (https://www.stomt.com/YOUR_PAGE/apps). The target connected to this application id will be used as target. |
| `position` | String | You can set the `position` of the button, the default position is `right`. If required you can align the button to the left side by passing `position: 'left'`. |
| `label` | String | The default label of the button is `Feedback`, you can change that by passing another `label`. |
| `colorText` | String | To change the colors used for the widget button you have three options to configure. The first one is `colorText`, it allows you to change the text color (default: `#FFFFFF`). |
| `colorBackground` | String | The `colorBackground` option allows you to change the background color of the button (default: `#0091C9`). |
| `colorHover` | String | The `colorHover` option allows you to change the background color of the button when the user hovers it (default: `#04729E`). |
| `showClose` | Boolean | Via the `showClose` property, you can specify whether the Close Icon in the Tab Widget should be shown or not (default: `true`). |
| `preload` | Boolean | By setting the property `preload` to `true`, you can tell the Widget to preload the Tab iframe in the background (default: `false`). This reduces the loading delay when showing the Tab for the first time. |
