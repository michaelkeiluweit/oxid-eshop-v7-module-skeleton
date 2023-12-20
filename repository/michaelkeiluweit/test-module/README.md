## Installation

Download the ZIP file and extract it next to the directories _source_ and _vendor_.
```
composer config repositories.mk-testmodule path repository/michaelkeiluweit/test-module/
composer require michaelkeiluweit/test-module
./vendor/bin/oe-console o:m:a testmodule --shop-id=1
```
