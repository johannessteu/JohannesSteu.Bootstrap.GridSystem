JohannesSteu.Bootstrap.GridSystem
=================================

This packages provides some new NodeTypes vor TYPO3.NEOS:

* TwoColumn
* ThreeColumn
* FourColumn

Those NodeTypes will provide a basic gridsystem based on Bootstrap (http://getbootstrap.com). Each grid has several layout-options.

Installation
------------
Install via composer:
```

```

or just copy this pacakge in YOUR_ROOT/Packages/JohannesSteu.Bootstrap.GridSystem 

Afterwards include the GridSystem.ts2 in your main TypoScript 
```
include: resource://JohannesSteu.Bootstrap.GridSystem/Private/TypoScripts/Library/GridSystem.ts2
```


Usage
-----
To use this plugin just create a new ContentElement inside your page and choose one of the new types. The Inspector-Pane will give you access to all diferent layouts.
