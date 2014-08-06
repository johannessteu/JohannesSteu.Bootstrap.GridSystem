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

or just copy this package in YOUR_ROOT/Packages/JohannesSteu.Bootstrap.GridSystem

Afterwards include the GridSystem.ts2 will be auto-inlcuded in your main TypoScript. Otherwise use
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


Planned Features
----------------
* Make Columns for each breakpoint more configurable