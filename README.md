# Moodle Blocks

Simple Moodle blocks that implement the Google Search API to display search results for the static query "moodle blocks".

The block googlesearch displays the API response as raw json object whereas googlesearch_prettier shows an already formatted version of the response object.

## Prerequisites

* Preinstalled Moodle installation on a linux server [Documentation](https://docs.moodle.org/39/en/Installing_Moodle)

## Installation

1. Clone repository [moodle_blocks](https://github.com/D1ANAmic/moodle_blocks)
2. Login to your server instance and from moodle_blocks directory copy googlesearch and googlesearch_prettier to your server's moodle/blocks directory (e.g. CentOS 7 - /var/www/html/moodle/blocks)
3. Go to your moodle admin panel and refresh the page. Plugin setup view should be displayed due to the changes on the server. Follow the instructions to enable the new blocks
4. Go to whatever page you want your blocks to be displayed on (e.g. Dashboard). Activate edit mode and click on "Add block". Search for "Google Suche" and "Google Suche (formatiert)" and add both to your page.