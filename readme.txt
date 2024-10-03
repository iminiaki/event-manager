=== Event Manager ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://example.com/
Tags: comments, spam
Requires at least: 4.5
Tested up to: 6.6.2
Requires PHP: 5.6
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

# Event Manager

A custom WordPress plugin to manage events. This plugin allows users to create, manage, and display events with associated details, including custom taxonomies, metadata, and integration with the WordPress REST API.

## Features

- **Custom Post Type:** Registers a custom post type called "Event".
- **Custom Taxonomies:** Creates a taxonomy "Event Type" for categorizing events.
- **Admin Interface Enhancements:**
  - Custom meta boxes for additional fields (event date, location).
  - Customized admin list view to display event information.
- **Front-End Display:**
  - Templates for single event entries and event archives.
  - Shortcodes to embed event listings in posts or pages.
- **Search and Filtering Functionality:**
  - Users can search for events by taxonomy or date range.
- **User Notifications:**
  - Email notifications when events are published or updated.
  - RSVP functionality for users to confirm attendance.
- **REST API Integration:** Exposes the custom post type via the WordPress REST API.
- **Localization and Internationalization:** Prepared for translation with sample translation files.
- **Security Best Practices:** Input validation, sanitization, and nonce verification for data-modifying actions.
- **Performance Optimization:** Optimized database queries and caching strategies.
- **Unit Testing:** Includes tests for custom post type registration and meta box functionality.

## Installation

1. **Download the Plugin:**
   - Clone the repository or download the ZIP file.

2. **Upload to WordPress:**
   - Upload the `event-manager` folder to the `/wp-content/plugins/` directory.

3. **Activate the Plugin:**
   - Go to the WordPress admin area, navigate to **Plugins**, and activate the "Event Manager" plugin.

## Usage

1. **Create an Event:**
   - After activation, you can create events by navigating to **Events** in the WordPress admin menu.

2. **Add Event Details:**
   - Fill in the necessary fields such as event date, location, and other custom fields.

3. **Display Events:**
   - Use the shortcode `[event_manager_listings]` in posts or pages to display a list of events.
   - Customize the display by modifying the template files in the `templates/` directory.

4. **Search Events:**
   - Utilize the search functionality to filter events by taxonomy or date.

5. **Receive Notifications:**
   - Admin users will receive email notifications upon publishing or updating events.

## Unit Testing

The plugin includes unit tests to ensure core functionalities work correctly. To run tests:

1. Install the [WordPress Unit Test Framework](https://github.com/WordPress/wordpress-develop/tree/trunk/tests/phpunit).
2. Execute the tests from the command line:
   ```bash
   phpunit tests/test-custom-post-type.php
   phpunit tests/test-meta-boxes.php
