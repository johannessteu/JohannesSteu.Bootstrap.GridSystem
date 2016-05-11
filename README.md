JohannesSteu.Bootstrap.GridSystem
=================================

This packages provides some new NodeTypes to add versatile grid system. All default class names are made for usage with bootstrap (http://getbootstrap.com/css/#grid).
This package does not provide any CSS. You can you use your custom stylesheets or include the bootstrap CSS within your site package. It's also possible to
configure all class names to you needs.

With this package you will get this NodeTypes

**Predefined grids (with layout options):**
* 2 Columns (50/50; 25/75; 75/25; 33/66; 66/33; 20/80; 80/20)
* 3 Columns (33/33/33; 25/50/25)
* 4 Columns (25/25/25/25)

Those NodeTypes will provide a basic grid system. Each grid has several layout-options.

**Some more NodeTypes to create custom grids:**
* Container (fixed or fluid width)
* Row
* Grid

Installation
------------
Install it via composer. There are currently older versions available. For the latest version use >3.0.0 <br/>
The 1.2 branch is made for Neos 1.2 and includes the custom grid functionality. Version 1.0 is made vor Neos >= 1.1
3.0 is tested with Neos >= 2.1

```
composer require johannessteu/bootstrap-gridsystem
```
or just copy this package in YOUR_ROOT/Plugins/JohannesSteu.Bootstrap.GridSystem

Afterwards the Root.ts2 will be auto-included in your main TypoScript. Otherwise use
```
include: resource://JohannesSteu.Bootstrap.GridSystem/Private/TypoScript/Root.ts2
```
in your Root.ts2.

Inside your Template you need to load some stylesheets. If you go for bootstrap this you can do so with
```
<link rel="stylesheet" type="text/css" href="{f:uri.resource(package: 'TYPO3.Twitter.Bootstrap', path: '3.1/css/bootstrap.css')}" media="all">
```
inside your head-Section if there is the `TYPO3.Twitter.Bootstrap package` installed.

Usage
-----
To use this plugin just create a new ContentElement inside your page and choose one of the new types. The Inspector-Pane will give you access to all different layouts and settings. In Neos 1.2 and higher you will notice a new tab with some options as well.


Breakpoints
-----------
You can configure all breakpoints for all predefined columns. If you are not familiar which classes are used to configure the breakpoints check this out: http://getbootstrap.com/css/#grid .
To Override the default breakpoints you just have to override the settings in your Site's Settings.yaml. Make sure that this package is not required after your Sites package. Best practice would be to require this plugin inside your Sites composer.json

If you e.g. would like to break the 50-50 layout also at size xs in a 50-50 layout you have to add this in Packages/Sites/YourVendor.SiteKey/Configuration/Settings.yaml
```
JohannesSteu:
  Bootstrap:
    GridSystem:
      Layouts:
        '50-50':
          'col-1': 'col-xs-6'
          'col-2': 'col-xs-6'
        '25-50-25':
          'col-1': 'col col-xs-12 col-sm-3'
          'col-2': 'col col-xs-12 col-sm-6'
          'col-3': 'col col-xs-12 col-sm-3'
        '25-25-25-25':
          'col-1': 'col col-xs-12 col-sm-3'
          'col-2': 'col col-xs-12 col-sm-3'
          'col-3': 'col col-xs-12 col-sm-3'
          'col-4': 'col col-xs-12 col-sm-3'
```

Custom Grids
-----------
To create custom grids first you add a new "Custom row". In this row you can add multiple nodes of type `Column`. For each Column you can set:
* size XS to LG
* visiblity
* hidden
* offset sm-lg
* ordering pull sm-lg
* ordering push sm-lg