# Kirby Webpack Kit

Webpack 4 setup for [getkirby/plainkit](https://github.com/getkirby/plainkit).

Features:

* Sass with autoprefixing
* Dev build using brower-sync
* Hot reloading when running dev build
  * kirby plugin switches css reference via x-forwarded header via browser-sync
* Minifified prod build

## Assumptions

* You're already serving the site locally with mamp/wamp/xampp/etc. If not, modifiations are required in `tools/srcServer.js`.
* Sass for css compilation. If not you'll need to install and configure the appropriate webpack loaders.

## Setup

* Install node (latest tested runtime: node v10.16.3)
* Install pnpm (optional, i.e. substitue w/ npm, yarn, etc...)
* Install node dependencies: `pnpm install`
* Update `config/devConfig.js` with the local url (i.e. mysite.localhost).

## Scripts

* `pnpm run build` - create prod build of css and js in `assets/builds`
* `pnpm run start` - launch dev build with webpack + browser-sync

## Credits

See [brocessing/kirby-webpack](https://github.com/brocessing/kirby-webpack).
