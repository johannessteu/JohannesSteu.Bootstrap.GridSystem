JohannesSteu.Bootstrap.GridSystem
=================================

This packages provides some new NodeTypes vor TYPO3.NEOS:

* TwoColumn
* ThreeColumn
* FourColumn

Those NodeTypes will provide a basic gridsystem based on Bootstrap (http://getbootstrap.com). Each grid has several layout-options.

Installation
------------
Install via composer (current version is dev-master):
```
composer require johannessteu/bootstrap-gridsystem
```
or just copy this package in YOUR_ROOT/Plugins/JohannesSteu.Bootstrap.GridSystem

Afterwards the GridSystem.ts2 will be auto-inlcuded in your main TypoScript. Otherwise use
```
include: resource://JohannesSteu.Bootstrap.GridSystem/Private/TypoScripts/Library/GridSystem.ts2
```
in your Root.ts2.
In your Template you need to load the bootstrap css with
```
<link rel="stylesheet" type="text/css" href="{f:uri.resource(package: 'TYPO3.Twitter.Bootstrap', path: '3.1/css/bootstrap.css')}" media="all">
```
inside your head-Section.

Usage
-----
To use this plugin just create a new ContentElement inside your page and choose one of the new types. The Inspector-Pane will give you access to all different layouts.


Breakpoints
-----------
You can configure all breakpoints for all columns. If you are not familiar which classes are used to configure the breakpoints check this out: http://getbootstrap.com/css/#grid .
To Override the default breakpoints all you have to do is to override the settings in your Site's Settings.yaml. Make sure that this package is not required after your Sites package. Best practice would be to rquire this plugin inside your Sites composer.json

If you e.g. would like to break the 50-50 layout also at size xs in a 50-50 layout you have to add this in Packages/Sites/YourVendor.SiteKey/Configuration/Settings.yaml
```
JohannesSteu:
  Bootstrap:
    GridSystem:
      Layouts:
        '50-50':
          'col-1': 'col-xs-6'
          'col-2': 'col-xs-6'
```

Planned Features
----------------
* Nothing more planned right now. Feel free to request new features!
