# STOMT Joomla Extension

How to integrate STOMT on your JOOMLA website?


## Installation

1. Download the [ziped project](https://github.com/stomt/stomt-joomla-extension/archive/master.zip).

2. Open the joomla administrator page, choose "Extension" and then "Manage".

3. Upload the ZIP

4. Go again to "Extenstion", "Plugins" and search for "STOMT".

5. Enable it, add your AppId in Options and save everything.


### Configuration

The parameters can be configured in the admin-panel to initialize the widget.

| Property | Type | Description |
| :--- | :--- | :--- |
| `appId` _(required)_ | String | The `appId` is your pages application id. You can find it in your application overview in STOMT (https://www.stomt.com/YOUR_PAGE/apps). The target connected to this application id will be used as target. |
| `position` | String | You can set the `position` of the button, the default position is `right`. If required you can align the button to the left side by passing `position: 'left'`. |
| `label` | String | The default label of the button is `Feedback`, you can change that by passing another `label`. |
| `colorText` | String | To change the colors used for the widget button you have three options to configure. The first one is `colorText`, it allows you to change the text color (default: `#FFFFFF`). |
| `colorBackground` | String | The `colorBackground` option allows you to change the background color of the button (default: `#0091C9`). |
| `colorHover` | String | The `colorHover` option allows you to change the background color of the button when the user hovers it (default: `#04729E`). |
| `preload` | Boolean | By setting the property `preload` to `true`, you can tell the Widget to preload the Tab iframe in the background (default: `false`). This reduces the loading delay when showing the Tab for the first time. |


## Example UI

### Admin-panel / User interface:

<img alt="Easy Integration" width="400" src="assets/panel.png"/>

<img alt="Easy Integration" width="400" src="assets/user_interface.png"/>

## Documentation Feed
### Create feed:
1- create a custom model
2-add the code to source code
```html
<div id="stomt_create"></div>```
3-add position and 
<img alt="Easy Integration" width="400" src="assets/create_feed.png"/>

### integrate feed:
1- create a custom model
2-add the code to source code
```JavaScript
Stomt.push(['addTab', options]);
```

```html
<div id="stomt_feed"></div>```
3-add position and save

<img alt="Easy Integration" width="400" src="assets/integrate_feed.png"/>

## Frequently Asked Questions

### What is STOMT all about?

STOMT lets you instantly give feedback in a predefined format. Head off to https://www.stomt.com to find out more!


## Authors

[Mariem Bader](https://github.com/mariembader123) | [Follow Mariem Bader on STOMT](https://www.stomt.com/mariem-bader)

[Max Klenk](https://github.com/maxklenk) | [Follow Max Klenk on STOMT](https://www.stomt.com/max-klenk)

See also the list of [contributors](https://github.com/stomt/stomt-joomla-extension/contributors) who participated in this project.


## More about STOMT

*Integrate and use STOMT on all your touchpoints.*

* On the web [www.stomt.com](https://www.stomt.com)
* [STOMT for iOS](http://stomt.co/ios)
* [STOMT for Android](http://stomt.co/android)
* [STOMT for Unity](http://stomt.co/unity)
* [STOMT for Unreal](http://stomt.co/unreal)
* [STOMT for Websites](http://stomt.co/web)
* [STOMT for Wordpress](http://stomt.co/wordpress)
* [STOMT for Drupal](http://stomt.co/drupal)
