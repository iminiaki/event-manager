<?php
class EventManagerMetaBoxesTest extends WP_UnitTestCase {

    private $post_id;

    protected function setUp(): void {
        parent::setUp();
        $this->post_id = $this->factory->post->create(array('post_type' => 'event'));
    }

    public function test_event_date_meta_box() {
        update_post_meta($this->post_id, '_event_date', '2024-01-01');

        $event_date = get_post_meta($this->post_id, '_event_date', true);
        $this->assertEquals('2024-01-01', $event_date);
    }

    public function test_event_location_meta_box() {
        update_post_meta($this->post_id, '_event_location', 'New York, NY');

        $event_location = get_post_meta($this->post_id, '_event_location', true);
        $this->assertEquals('New York, NY', $event_location);
    }
}
