# Changelog

## 1.10.6 (December 05, 2017)

### Fixed

- Fix pagination on Windows platforms (Joomla)
- Add missing error.php to templateDetails.xml (Joomla)

## 1.10.5 (December 01, 2017)

### Added

- Add reset filter button to style and layout library
- Add border mode to alert in style customizer
- Add font options to search in style customizer
- Add error page (Joomla)

### Fixed

- Create separate `theme.css` for multisites (Wordpress)
- Create separate `theme.css` for template styles (Joomla)
- Include missing preventAutofocus.js file in dist
- Fixed validation messages not shown in frontend editing (Joomla)

## 1.10.4 (November 16, 2017)

### Added

- Make html/pagination.php overwritable in child theme (Joomla)

### Fixed

- Fix error in JSON views (Joomla)
- Prevent `input` elements with `autofocus` attribute from gaining focus in customizer preview

## 1.10.3 (November 13, 2017)

### Fixed

- Fix media manager in frontend edit (Joomla)
- Fix IE 11 regression

## 1.10.2 (November 09, 2017)

### Changed

- Load jQuery automatically if used in `theme.js` in child themes (WordPress)

### Fixed

- Fix Accordion elements not opening
- Fix failed loading Icomoon fonts (Joomla)
- Fix Slideshow YouTube videos play inline on mobile

## 1.10.1 (November 08, 2017)

### Changed

- Load jQuery automatically if used in `theme.js` in child themes (Joomla)

### Fixed

- Fix CSS auto-compiling after theme update
- Fix multi-line selectors in custom CSS field in the builder
- Fix rare fatal error in child themes with 3rd party modules
- Prevent saving the style customizer if a Less error occurs

## 1.10.0 (November 07, 2017)

### Added

- Add slideshow element to builder
- Add controls, muted and playsinline options to video element
- Add advanced coloring and parallax options to builder column
- Add max width breakpoint option to all builder elements
- Add reset style button to style customizer components overview
- Add UI preview for the theme component to style customizer
- Add thumbnav component to style customizer
- Add large margin option to overlay and gallery element

### Changed

- Rework UI preview in style customizer
- Rework save and cancle handling in style customizer
- jQuery is no longer be loaded by default, enable corresponding setting to load it
- Allow to select a style and a video for sections at the same time
- Switcher element is now using the thumbnav style for thumbnail navigation
- Update dotnav and slidenav styles in all styles

### Removed

- Remove fallback image and use playsinline attribute instead for section videos

### Fixed

- Fix background image breaking style textures for builder column
- Fix visual editor default settings (WordPress)
- Fix render widgets in custom positions (WordPress)
- Fix breaking stacked-center-a header layout
- Fix invalid connect_ids for switcher, image and button element
- Fix animated navbar line in Safari
- Fix markup in Joomla Module Element
- Fix Gallery and Grid Elements support YouTube and Vimeo URLs
- Fix Lightbox with anchor elements in description

## 1.9.9 (September 29, 2017)

### Added

- Add option to center logo for modal and offcanvas header layouts
- Add z index option to parallax settings
- Add UI preview for the inverse component to style customizer

### Changed

- Optimize CSS and markup for boxed page option
- Move border mode for body element to theme page class
- Rework UI preview pages of all components for style customizer

### Fixed

- Fix overlay max width option in overlay and gallery element
- Fix search icon style in navbar for modal mode
- Fix TinyMCE notification z-index
- Fix email cloaking cleanup (Joomla)
- Fix comments pagination links (WordPress)
- Fix form blank focus style

## 1.9.8 (September 25, 2017)

### Added

- Enable page builder in substyles (Joomla)

### Fixed

- Fix MailChimp provider shows only up to 10 lists in newsletter element
- Fix module element closing title tag (Joomla)

## 1.9.7 (September 19, 2017)

### Fixed

- Fix RTL theme CSS include (WordPress)
- Fix link picker with multiple menus (Joomla)
- Fix module position renderer (Joomla)

## 1.9.6 (September 8, 2017)

### Fixed

- Fix image srcset sizing

## 1.9.5 (September 7, 2017)

### Fixed

- Fix image preview in layouts

### Changed

- Optimize less source file loading

## 1.9.4 (August 30, 2017)

### Fixed

- Fix submenus in nav rendering
- Fix grid and gallery animation settings
- Fix animated navbar line in Firefox
- Fix show UI components option for boxed page layouts with vertical padding
- Fix prevent duplicate meta charset (Joomla)
- Fix link picker (WordPress)

## 1.9.3 (August 18, 2017)

### Fixed

- Fix navbar animations in Firefox
- Fix Module Class Suffix in module overrides (Joomla)
- Fix boxed container width and background

## 1.9.2 (August 16, 2017)

### Fixed

- Fix centered toolbar-right position if toolbar-left is empty
- Fix unsorted inverse variables in style customizer
- Fix system overrides in child-theme (Joomla)
- Fix layout select field

## 1.9.1 (August 03, 2017)

### Fixed

- Fix editing builder module
- Fix 'Enable click mode on text separators' mode

## 1.9.0 (August 01, 2017)

### Added

- Add lightbox gallery to grid and gallery element
- Add lightbox options to image and button element
- Add section title options
- Add vertical alignment option if section height is larger than its content
- Add mixed image orientation mode to Gallery and Grid element
- Add min-height option to Overlay and Gallery element
- Add support for hover image only to Overlay and Gallery element
- Add option to center the toolbar
- Add option to pick files to all link fields
- Child theme can overwrite more template files, e.g. index.php and offline.php
- Child theme loads custom elements from builder/ directory
- Child theme loads custom module from config.php

### Changed

- Check for script tags in custom script code
- Refactored tabs and settings UI for sections
- Add link picker to redirect field in Newsletter element
- Improve dropbar style in some themes

### Fixed

- Fix HTML element option in divider element
- Fix Id option in switcher element
- Fix sticky navbar behaviour
- Fix dropdown position if navbar has responsive height

## 1.8.5 (July 26, 2017)

### Fixed

- Fix content style setting in accordion
- Fix opening anchor links from the Offcanvas menu
- Fix rare case of "Invalid CSRF token" upon saving (WordPress)

## 1.8.4 (July 19, 2017)

### Fixed

- Fix email cloaking cleanup (Joomla)
- Fix title attributes on menu anchors (Joomla)

## 1.8.3 (July 12, 2017)

### Fixed

- Fix email cloaking issue (Joomla)

### Changed

- Update administration language files

## 1.8.2 (July 10, 2017)

### Fixed

- Fix library in Builder Module (Joomla)
- Fix compatibility with yoast plugin (WordPress)

## 1.8.1 (July 05, 2017)

### Fixed

- Fix Google Fonts issue
- Disable general field instead of hide
- Fix highlight search result (Joomla)

## 1.8.0 (July 04, 2017)

### Added

- Add style library
- Add 45 color variations to style library
- Add link picker
- Add group field type
- Add divider attribute for fields

### Changed

- Refactored tabs and settings UI for elements
- Layout library remembers filters when closed
- Use range picker instead of text fields in map element
- Update administration language files
- Set gestureHandling to cooperative by default for google maps
- Activated double opt-in for MailChimp in newsletter element

### Fixed

- Fix link/title bullet combination for panel and grid element
- Fix template settings in module front-end editing view
- Fix nav hover style in menu panel (Joomla)
- Offcanvas in overlay mode will close and keep scroll position if anchor link was clicked

## 1.7.7 (June 26, 2017)

### Fixed

- Fix error with saving Pro Layouts

## 1.7.6 (June 23, 2017)

### Fixed

- Fix notice on article edit screen (Joomla)
- Fix error in style customizer (WordPress)


## 1.7.5 (June 21, 2017)

### Fixed

- Fix article TOC display (Joomla)
- Fix article multiple categories styling (WordPress)
- Allow for script tags in builder data (WordPress)
- Fix panel widths in customizer (WordPress)

## 1.7.4 (June 14, 2017)

### Fixed

- Fix issue with custom fields saving (Joomla)
- Fix transparent navbar with builder module on top position

## 1.7.3 (June 08, 2017)

### Changed

- Use range picker instead of text fields for popover element
- Media Picker remembers last used view (thumbnail / list) upon opening (Joomla)

### Fixed

- Fix MailChimp name fields in newsletter element
- Fix frontend editing
- Fix builder module/widget warning messages
- Fix Joomla Position/WordPress Area Elements names searchable

## 1.7.2 (June 07, 2017)

### Added

- Add J! Position builder element
- Add WP Area builder element
- Add dedicated builder module positions and widget areas

### Changed

- Sort less export by variable names

## 1.7.1 (June 02, 2017)

### Added

- Add 500px icon to social icons

### Changed

- Put custom JavaScript code in isolated script tag

### Fixed

- Fix issue with 3rd party extensions (Joomla)

## 1.7.0 (June 01, 2017)

### Added

- Add Juno style
- Add builder module/widget
- Add newsletter element to builder
- Add popover element to builder
- Add parallax options to builder elements
- Add image parallax option to builder section
- Add parallax mode to grid and gallery element
- Add width and height option for logos
- Add marker component to style customizer
- Add form range component to style customizer
- Add xlarge padding option to builder column
- Add support menu header item (WordPress)
- Add div to HTML element option for the headline element
- Add link text option to builder elements and style customizer
- Add border mode for body to base
- Add link field to headline element
- Add max width option to more builder elements

### Changed

- 'uk-*' attributes are preserved in visual editor
- Collapse layout if module/widget elements have no output
- Media Picker remembers last browsed folder upon opening (Joomla)
- Empty builder by deleting its last section

### Fixed

- Fix width and height option for SVG image on sections and tiles
- Fix frontend editing and module class suffix for Joomla modules
- Fix column option for large screens in Grid and Gallery element
- Fix display options if navigation is bottom aligned for switcher element
- Fix prevent frontend editing when no user is logged in (Joomla)
- Fix library media download (Joomla)
- Allow '0' as content in builder elements
- Do not render filtered widgets in WP Widget element (WordPress)
- Link to page builder from article edit view contains correct Itemid now (Joomla)

## 1.6.5 (May 09, 2017)

### Fixed

- Fix bottom aligned thumbnails for switcher element
- Fix navbar behaviour for none transparent sections
- Fix emptying layouts in builder behaviour
- Fix navbar behaviour (iOS < 9.3)

## 1.6.4 (May 04, 2017)

### Fixed

- Fix builder toolbar being shown without open builder
- Fix editor for users with limited access (WordPress)
- Fix less error messages on custom less field
- Fix drag and drop in builder on devices with both mouse and touch
- Fix syntax highlighting in custom JavaScript field

## 1.6.3 (May 02, 2017)

### Added

- Add Vibe style

### Fixed

- Prevent nested &lt;p&gt; tags in builder page

## 1.6.2 (April 28, 2017)

### Added

- Add fallback image for touch devices for video sections

### Changed

- Disable visual editor when no visual system editor enabled

### Fixed

- Fix UIkit/Master theme styles with custom fonts
- Countdown element supports more than two digits
- Fix header mobile layout offcanvas overlay mode
- Fix 'Link' label in style customizer

## 1.6.1 (April 27, 2017)

### Changed

- Visual editor use line breaks instead of paragraphs for heading element

### Fix

- Fix incompatibility with PHP versions < 5.4.32, 5.5.16

## 1.6.0 (April 26, 2017)

### Added

- Add system WYSIWYG editor
- Add table element to builder
- Add countdown element to builder
- Add option to anonymize IPs for Google Analytics
- Add box-shadow bottom option to builder elements
- Add shadow options to video element
- Add font-style option to style components
- Add border gradient support to base, button and tab
- Add gradient support to navbar container

### Changed

- Update UIkit to 3.0.0 beta22
- Update table component according to UIkit
- Start playing animated Gifs when entering the viewport

### Fix

- Fix list striped component
- Fix select box color if bg is transparent in IE11 and Edge

## 1.5.7 (April 21, 2017)

### Changed

- Renamed module template parameter (Joomla)

### Fixed

- Fix arguments in widget element (WordPress)
- Fix menu rendering in widget element (WordPress)
- Fix Navbar in RTL mode

## 1.5.6 (April 19, 2017)

### Fixed

- Fix customizer session handling (Joomla)

## 1.5.5 (April 19, 2017)

### Fixed

- Fix article view ACL (Joomla)

## 1.5.4 (April 18, 2017)

### Fixed

- Fix icons
- Fix article view ACL (Joomla)

## 1.5.3 (April 18, 2017)

### Changed

- Updated Woocommerce style (WordPress)

### Fixed

- Fix Navbar Dropbar

## 1.5.2 (April 13, 2017)

### Changed

- Improve Builder sorting performance
- Accordion menu parent items (WordPress)

### Fixed

- Fix openstreetmap not using https
- Fix Builder memory leaks
- Fix Woocommerce 3.x product gallery

## 1.5.1 (April 06, 2017)

### Fixed

- Fix text alignment for button, social and subnav elements
- Fix mobile dropdown menu
- Fix duplicate module/widget ids
- Fix expand mode on 'main' container

## 1.5.0 (April 04, 2017)

### Added

- Add Copper Hill style
- Add custom CSS field for builder elements
- Add style and alignment options for offcanvas and modal header layouts
- Add style and alignment options for mobile layouts
- Add more fields and options to description-list element
- Add google maps url support in social links
- Add tripadvisor and yelp to icons
- Add autocomplete to code fields
- Add gradient support to card hover
- Add options to remove left logo padding in header
- Add typo options to logo, table and description-list in style customizer
- Add padding options vertical tabs in style customizer
- Add transitions to nav items

### Changed

- Improve Google font loading
- Improve offcanvas and modal header layouts
- Navs with parent links are no longer rendered as Accordion
- Wrap page in offcanvas content div
- Make navbar toggle text look like navbar nav items
- Updated administration language files

### Fixed

- Fix offcanvas scrolling on touch devices

## 1.4.3 (March 17, 2017)

### Fixed

- Fix missing RTL stylesheet

## 1.4.2 (March 17, 2017)

### Fixed

- Fix background video height in sections
- Fix Javascript error when using multiple map elements in builder
- Fix wrong locale no-NO in language files

## 1.4.1 (March 16, 2017)

### Fixed

- Fix missing builder elements
- Fix "Pro Layouts" tab in layout library

## 1.4.0 (March 16, 2017)

### Added

- Add overlay element to builder
- Add gallery element to builder
- Add switcher element to builder
- Add more fields and options to accordion element
- Add row column settings in builder
- Add tile component to style customizer
- Add 25 site and 11 admin localizations
- Add support for RTL languages

### Changed

- Update outdated CSS when opening customizer

### Fixed

- Fix menu style setting in widget element (WordPress)
- Fix "Preview all UI elements" disable on style change
- Fix rendering of additional menus in navbar with layout Stacked Center Split
- Fix loop youtube videos
- Fix PageBuilder button in IE 11

## 1.3.13 (March 07, 2017)

### Fixed

- Fix transparent header behaviour
- Fix builder in Firefox

## 1.3.12 (March 03, 2017)

### Fixed

- Fix "sticky on up" behaviour in Navbar

## 1.3.11 (March 02, 2017)

### Changed

- Disable 'Visual' Editor button on page edit view (WordPress)

### Fixed

- Fix JavaScript error in frontend
- Fix navbar groups center left/right in IE 11
- Fix alt attribute for images in grid element
- Fix blockquote inverse color in fjord style
- Fix panel animations in customizer (WordPress)
- Fix transparent png issue if resized

## 1.3.10 (March 02, 2017)

### Fixed

- Fix transparent navbar overlay
- Fix widgetkit compatibility (WordPress)

## 1.3.9 (March 01, 2017)

### Added

- Add Sonic style
- Add background image option for all section styles
- Add gutter and breakpoint option to description-list element
- Add text color setting to headline, module / widget and panel element
- Add on hover box-shadow option to image element
- Add support for heading hero
- Add display link option to list element
- Add image box-shadow option to panel and grid element
- Add receiver icon to social icons
- Add gradient support to divider, icon, navbar, progress and subnav

### Changed

- Use JS solution for transparent headers

### Fixed

- Fix image background position center for sections
- Fix responsive breakpoints for Quarters 1-2-1 row layout
- Fix display image option in list element
- Fix modules/menu items staying checked out after edit (Joomla)
- Fix mod_menu apply additional params (Joomla)
- Fix image transparency issue on resize

## 1.3.8 (February 17, 2017)

### Fixed

- Fix Grid element
- Fix library layout saving
- Fix Maps element
- Fix custom menu widget rendering (WordPress)
- Fix saving widget settings (WordPress)

## 1.3.7 (February 16, 2017)

### Fixed

- Fix images in pro layouts overview
- Fix justified dropdown menu item
- Fix Media Picker (Joomla)

## 1.3.6 (February 15, 2017)

### Fixed

- Fix module select in builder (Joomla)
- Fix finder module advanced mode (Joomla)

## 1.3.5 (February 14, 2017)

### Fixed

- Fix builder issue with empty value

## 1.3.4 (February 13, 2017)

### Added

- Show builder toolbars in footer
- Add menu style setting for menu modules/widgets
- Add image align bottom option to panel and grid element

### Changed

- Update UIkit to 3.0.0 beta10

### Fixed

- Fix Google Fonts in font picker
- Fix social icons wrapping if navbar is centered
- Fix content change check on articles with tinyMCE 3.x (Joomla)

## 1.3.3 (February 06, 2017)

### Added

- Gradient field for style

### Fixed

- Fix scrollspy animations
- Fix content change check on articles with tinyMCE (Joomla)

## 1.3.2 (February 03, 2017)

### Changed

- Update UIkit to 3.0.0 beta9
- Update German admin language file

### Removed

- Custom dropdown width for single navbar items

### Fixed

- Fix Google font subset loading in IE
- Fix start/end level menu module setting (Joomla)
- Fix comment submit button style for iOS (WordPress)
- Fix Media Picker in frontend (Joomla)

## 1.3.1 (February 02, 2017)

### Changed

- Update UIkit to 3.0.0 beta8
- Revert header split menu behavior
- Check replace layout option by default

### Fixed

- Fix IE compatibility
- Section xsmall variable in style customizer
- Fix dotnav inverse variables
- Fix hidden title field for panel and grid element

## 1.3.0 (February 01, 2017)

### Added

- Add Fjord style
- Add layout library
- Add UIkit theme to style customizer
- Add German admin language file
- Add panel fields and options to grid element
- Add meta field and options to panel element
- Add image card and content style options to panel element
- Add option for overlapping sections with richer graphics
- Add more section height options
- Add gradient support to button, card, overlay and section
- Add background-image support to section

### Changed

- Move content settings into their own tab for panel element
- Move animations to grid items for grid element
- Update UIkit to 3.0.0 beta7

### Fixed

- Fix logo centering for split navbar header layout
- Fix image alignment in panel element
- Fix order option for breakpoints in builder rows
- Fix uploads in Media Picker (Joomla)
- Fix error messages in Media Picker (Joomla)
- Add missing video dimensions for video sections

## 1.2.16 (January 24, 2017)

### Added

- Add German language file (site)

### Changed

- Update UIkit to 3.0.0 beta6

### Fixed

- Fix module/widget list style
- Fix maps element (WordPress)

## 1.2.15 (January 23, 2017)

### Fixed

- Fix customizer settings (WordPress)

## 1.2.14 (January 22, 2017)

### Changed

- Update UIkit to 3.0.0 beta5

### Fixed

- Fix viewport height issue
- Fix IE + Edge compatibility

## 1.2.13 (January 21, 2017)

### Fixed

- Fix Jetpack compatibility (WordPress)

## 1.2.12 (January 19, 2017)

### Added

- Add inherit to typo options in style customizer
- Add font-style option to meta text in style customizer

### Fixed

- Fix IE + Edge compatibility

## 1.2.11 (January 18, 2017)

### Fixed

- Fix builder sorting
- Fix UIkit icon image path
- Fix preview module positions (Joomla)

## 1.2.10 (January 17, 2017)

### Added

- Add pagination option to toggle Start/End links (Joomla)

### Changed

- Update leaflet to 1.0.2
- Update dropdown nav in max style
- Update default code, pre and blockquote style
- Change global border-radius behaviour in all themes
- Change default value for zooming/dragging option in maps element
- Adapt customizer style to latest WordPress version (WordPress)

### Fixed

- Fix card component hover transition
- Fix image paths for divider and list icons in fuse and horizon style
- Fix WooCommerce gallery thumbnailview for WooCommerce 2.7+ (WordPress)

## 1.2.9 (January 02, 2017)

### Added

- Add Joline style
- Add box-shadow option to image element
- Add x-small padding to section options

### Changed

- Optimized CSS selectors for inverse mode
- Renamed UIkit internal image variables
- Update pagination output

### Fixed

- Fix form border for inverse mode
- Fix link style for inverse mode
- Fix blockquote footer color for inverse mode
- Fix badge focus style
- Fix categories count in article view (WordPress)

## 1.2.8 (December 23, 2016)

### Changed

- Renamed styles to website name

### Fixed

- Fix style parsing
- Fix navbar decorative line in Safari
- Fix module/widget list style on sections

## 1.2.7 (December 22, 2016)

### Fixed

- Fix asset cache breaker (Joomla)
- Fix inline style/script order (WordPress)

## 1.2.6 (December 21, 2016)

### Changed

- Update Module/Widget builder element select

### Fixed

- Fix double initialization (WordPress)

## 1.2.5 (December 20, 2016)

### Added

- Add list options for modules/widgets

### Fixed

- Fix builder sorting
- Fix navbar behaviour
- Fix resizing of images with non-alphanumeric characters
- Fix map element with hidden markers
- Fix render menu widgets (WordPress)
- Fix labels in navbar item edit (WordPress)
- Fix child-theme module overrides (Joomla)

## 1.2.4 (December 14, 2016)

### Changed

- Update "Read more" translation
- Customizer route redirects to login for guests (Joomla)

### Fixed

- Fix z-index issue for map elements
- Fix Module/Widget builder element settings
- Fix code syntax highlighting
- Fix builder refresh issue (WordPress)
- Fix compatibility with Advanced Module Manager extension (Joomla)

## 1.2.3 (December 12, 2016)

### Fixed

- Fix edit template style (Joomla)

## 1.2.2 (December 12, 2016)

### Added

- Add button text style mode
- Add border option to dropdowns and subnav pill
- Add typo options to blockquote footer
- Add more text alignment options for modules/widgets
- Add border bottom option to headerbar top
- Add option to hide category title on archive view (WordPress)

### Changed

- Minor UIkit theme modifications

### Fixed

- Fix category multi-column order (Joomla)
- Fix dropdowns in customizer mode (WordPress)

## 1.2.1 (December 07, 2016)

### Fixed

- Fix WordPress 4.7 incompatibility issue
- Fix check for API key (Joomla)
- Fix featured article parameters (Joomla)
- Fix title on edit modules and menu items modal (Joomla)

## 1.2.0 (December 05, 2016)

### Added

- Add Max style
- Add layout options for blog and posts
- Add title options for modules/widgets
- Add headline style line to elements
- Add preserve color option for primary and secondary sections
- Add x-large padding to section options
- Launch page builder from article edit (Joomla)
- Add dashboard quickicon for website builder (Joomla)
- Add front-end editing if page builder is active (Joomla)

### Changed

- Refactored system pages and modules/widgets
- Split element component into divider, heading and link component
- Primary and secondary sections now adapt the text color automatically
- page builder button opens builder directly (WordPress)
- Mark menu-item as active if current page is a sub-page of the menu-item (WordPress)

### Fixed

- Fix sidebar wrapping if grid gutter is none
- Fix element settings if previously saved empty
- Fix WooCommerce styling
- Fix module blank style
- Resetting style variables shows save button
- Fix widget selection in builder (WordPress)
- Fix missing alt attribute for intro images (Joomla)
- Fix CodeMirror overflow in front-end editing (Joomla)

## 1.1.6 (November 24, 2016)

### Changed

- Set form radio background to transparent in material UIkit style

### Fixed

- Fix icon ratio and color in list element
- Fix scroll behaviour on page refresh
- Fix Map element (WordPress)
- Fix Navbar item options (WordPress)

## 1.1.5 (November 21, 2016)

### Added

- Add max width option for grids in the builder
- Add option to open links in new window for all list elements
- Add smooth scrolling to links with URL fragments for all elements
- Add sidebar.php layout file (required by WooCommerce)
- Add icon alignment option to button element
- Add icon option to list element
- Add link muted as style option to button element
- Make builder element templates overridable in child-theme (/builder/{element}/template.php)

### Changed

- Update Bootstrap layer (Joomla)

### Fixed

- Make transparent header work with section styles
- Remove possible horizontal scrollbar during animations
- Fix font-smoothing after animation for Webkit
- Fix textarea border for minimal style
- Fix z-index issue for mobile dropdown menu
- Ignore compression setting in customizer mode
- Access check on builder page (Joomla)
- Save button on Menu/Module edit (Joomla)
- Navbar item options (WordPress)
- Fix asset urls within installations using custom ports (WordPress)

## 1.1.4 (November 15, 2016)

### Added

- Clear cache button
- Pass through video url parameters (video element)

### Changed

- Saving a layout won't show the builder's save button
- Show default social icon if service is unknown

### Fixed

- Element sorting in builder
- Menu widgets (WordPress)

## 1.1.3 (November 11, 2016)

### Fixed

- Fix theme updater (WordPress)

## 1.1.2 (November 11, 2016)

### Fixed

- Fix builder on empty article (Joomla)

## 1.1.1 (November 10, 2016)

### Added

- "New" button for menu items and modules (Joomla)

### Changed

- Update Google Fonts list
- Optimize drag style for builder elements
- Optimize changelog style

### Fixed

- Fix element animations delay
- Fix image element svg width/heigth
- Fix custom class on module/widget element
- Fix child themes (WordPress)
- Fix duplicating social icons bug (WordPress)
- Fix builder output when cache enabled (Joomla)

## 1.1.0 (November 07, 2016)

### Added

- Add WordPress support
- Add grid element to builder
- Apply content plugins/shortcodes to Builder output

### Fixed

- Fix builder element default values
- Fix click behaviour on item links in navbar
- Fix builder row layout edit
- Fix iconnav test

## 1.0.11 (November 02, 2016)

### Fixed

- Fix regression with Google fonts

## 1.0.10 (November 02, 2016)

### Added

- Add Horizon style
- Add fixed width option for grids
- Add decorative line for navbar items
- Add divider small style
- Add border mode top, left and right to style components
- Add box-shadow option to form and offcanvas
- Add more style options to blockquote and card badge

### Changed

- Improved variables ordering in style customizer
- Improved preview loading

### Fixed

- Customizer "cancel" no longer resets builder changes
- Make heading bullet work with text align
- Fix initial missing Google font variant and language settings
- Fix section default values
- Fix "Export variables" button disabled state
- Scrollspy animation classes are no longer applied to the row
- Joomla Module element respects its module's settings

## 1.0.9 (October 26, 2016)

### Added

- Add large option to section width
- Add xl alignment breakpoint for text align in elements

### Fixed

- Fix administration style
- Fix error on closing panel with editor, before value is set
- Fix always respect blog columns setting, preventing full-width articles
- Fix populate image alt attribute with filename if no alt text is set
- Fix missing inverse style options for all components
- Respect blog columns to prevent full width articles at the end
- HTML tags will no longer be stripped from footer elements

## 1.0.8 (October 21, 2016)

### Changed

- Significant speed improvement for style customizer

### Fixed

- Catch error with builder element
- Fix cancel button behaviour

## 1.0.7 (October 20, 2016)

### Added

- Add box shadow options to style components
- Add 100% width option in module template settings

### Changed

- Move image/video options for sections into their own panel
- Optimized box-shadow picker
- Optimized preview loading

### Fixed

- Fix default values in builder elements
- Fix variable names in style customizer
- Center social icons in header modal
- Fix builder toolbar (Safari 10)
- Fix page class output
- Fix .row-striped styling (Bootstrap)
- Fix css minification

## 1.0.6 (October 19, 2016)

### Changed

- Wrap custom js code in try/catch block
- Optimize variable groups in style
- Rename search border radius variable

### Fixed

- Update UIkit components after css injection in style preview panel
- Fix style group ordering
- Fix media manager in debug mode (Joomla)
- Fix text color option if navbar is transparent
- Fix UIkit tests if boxed page layout is set

## 1.0.5 (October 18, 2016)

### Added

- Add border and typo options to style components
- Add border mode to style components
- Add background and border options to slidenav and totop style component
- Allow for css/custom.css in child theme
- Allow to add style via child themes

### Changed

- Minify theme CSS
- Load minified UIkit
- LESS updates accordion to UIkit
- Optimize UIkit tests
- Optimize variable groups in style
- Rename subnav, tab and breadcrumb item variables

### Fixed

- Prevent background repeat for section images
- Fix card media border-radius
- Expand main section to fill the viewport if needed
- Set default style to minimal
- Load Bootstrap framework
- Builder row layout select (Safari 10)
- Template module positions preview (tp=1)
- Fix Bootstrap input resets
- Fix CodeMirror style

## 1.0.4 (October 12, 2016)

### Fixed

- Fix minor UI issues
- Fix image indicator if color field is none

## 1.0.3 (October 11, 2016)

### Fixed

- Fix style font picker
- Fix child theme select
- Fix preview box-shadow
- Fix temporarily preview scrollbars in Firefox
- Prevent builder being active on offline login
- Prevent modules/menu items stay checked out after edit

## 1.0.2 (October 11, 2016)

### Fixed

- Fix modules rendering bug
- Fix offline mode in preview

## 1.0.1 (October 10, 2016)

### Fixed

- Fix Joomla URI handling

## 1.0.0 (October 10, 2016)

### Added

- Initial release
