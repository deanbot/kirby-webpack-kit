# Kirby Webpack Kit

Webpack 4 setup for [getkirby/plainkit](https://github.com/getkirby/plainkit).

Features:

* Sass with autoprefixing
* Dev build using brower-sync
* Hot reloading when running dev build
  * kirby plugin switches css reference via x-forwarded header via browser-sync
* Minifified prod build

## Requirements

Kirby runs on PHP 7.1+, Apache or Nginx. Dev tooling uses node v10.16.

## Assumptions

* You're already serving the site locally with mamp/wamp/xampp/etc. If not, modifiations are required in `tools/srcServer.js`.
* Sass for css compilation. If not you'll need to install and configure the appropriate webpack loaders.

## Setup

* Install node (latest tested runtime: node v10.16.3)
* Install pnpm (optional, i.e. substitue w/ npm, yarn, etc...)
* Install node dependencies: `pnpm install`
* Update config

## Config

Config options are stored in `config/devConfig.js`:

* `proxyUrl`:  local url (i.e. mysite.localhost)
* `reloadOnContentChange`: whether to reload browser on changes to content folder. This will cause unnecessary reloads of the browser if editing content via the panel using the localhost url. This can be avoided by using the panel from the proxyUrl.

## Scripts

* `pnpm run build` - create prod build of css and js in `assets/builds`
* `pnpm run start` - launch dev build with webpack + browser-sync

## Credits

See [brocessing/kirby-webpack](https://github.com/brocessing/kirby-webpack).
