<?php
class EventManagerCustomPostTypeTest extends WP_UnitTestCase {

    public function test_event_post_type_registered() {
        $this->assertTrue(post_type_exists('event'));
    }

    public function test_event_type_taxonomy_registered() {
        $this->assertTrue(taxonomy_exists('event_type'));
    }

    public function test_event_post_type_capabilities() {
        $capabilities = get_post_type_object('event')->cap;
        $this->assertArrayHasKey('edit_post', $capabilities);
        $this->assertArrayHasKey('read_post', $capabilities);
        $this->assertArrayHasKey('delete_post', $capabilities);
    }
}
