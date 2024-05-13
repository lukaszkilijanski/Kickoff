<h1 align="center">LukaszKilijanski_Kickoff</h1> 

<div align="center">
  <p>Magento2 very basic module to kickoff you Magento2 developer carrier.</p>
  <img src="https://img.shields.io/badge/magento-2.4.6-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg" /></a>  
<a href="https://lukasz-k.com/2023/08/01/magento2-kickoff-basic-module-part-1-2/" target="_blank"><img src="https://img.shields.io/badge/blog_post-_yes-brightgreen" /></a>
</div>

## Blog posts
Below you can find step by step blog post description to complete that what this module does.
<div>

 - <a href="https://lukasz-k.com/2023/08/01/magento2-kickoff-basic-module-part-1-2/" target="_blank"> Magento2 Kickoff – Part 1/2 </a>

 - <a href="https://lukasz-k.com/2023/09/05/magento2-kickoff-basic-module-part-2-2/" target="_blank"> Magento2 Kickoff – Part 2/2 </a>
</div>


## Table of contents

- [Summary](#summary)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Summary

This module enables you to show data from view model trough layout and .phtml template in indicated path in magento2 platform.

## Installation

Go to app/code directory in you project

To download:
```sh
mkdir LukaszKilijanski; cd $_
git clone https://github.com/lukaszkilijanski/Kickoff.git Kickoff;
```
To install:
```sh
bin/magento module:enable LukaszKilijanski_Kickoff
bin/magento setup:upgrade
```

## Usage

Go to path:
`<your_url>\kickoff\Hello\World`

Result:

![Demo](https://raw.githubusercontent.com/lukaszkilijanski/Kickoff/LK-2-Readme-update/docs/demo.png)

## License

[MIT](https://opensource.org/licenses/MIT)
