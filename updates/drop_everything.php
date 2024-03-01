<?php namespace October\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Migration to clean up
 */
return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('october_test_locations');
        Schema::dropIfExists('october_test_cities');
        Schema::dropIfExists('october_test_gallery_entity');
        Schema::dropIfExists('october_test_galleries');
        Schema::dropIfExists('october_test_galleries_countries');
        Schema::dropIfExists('october_test_comments');
        Schema::dropIfExists('october_test_people');
        Schema::dropIfExists('october_test_phones');
        Schema::dropIfExists('october_test_countries');
        Schema::dropIfExists('october_test_country_brothers');
        Schema::dropIfExists('october_test_countries_types');
        Schema::dropIfExists('october_test_plugins');
        Schema::dropIfExists('october_test_reviews');
        Schema::dropIfExists('october_test_posts');
        Schema::dropIfExists('october_test_roles');
        Schema::dropIfExists('october_test_people_roles');
        Schema::dropIfExists('october_test_themes');
        Schema::dropIfExists('october_test_users');
        Schema::dropIfExists('october_test_users_roles');
        Schema::dropIfExists('october_test_members');
        Schema::dropIfExists('october_test_categories');
        Schema::dropIfExists('october_test_channels');
        Schema::dropIfExists('october_test_related_channels');
        Schema::dropIfExists('october_test_meta');
        Schema::dropIfExists('october_test_attributes');
        Schema::dropIfExists('october_test_repeater_items');
        Schema::dropIfExists('october_test_tags');
        Schema::dropIfExists('october_test_posts_tags');
        Schema::dropIfExists('october_test_pages');
        Schema::dropIfExists('october_test_layouts');
        Schema::dropIfExists('october_test_products');
        Schema::dropIfExists('october_test_product_categories');
        Schema::dropIfExists('october_test_products_categories');
        Schema::dropIfExists('october_test_products_related_products');
        Schema::dropIfExists('october_test_products_locations');
        Schema::dropIfExists('october_test_products_members');
        Schema::dropIfExists('october_test_companies');
        Schema::dropIfExists('october_test_orders');
        Schema::dropIfExists('october_test_orders_products');
        Schema::dropIfExists('october_test_product_offers');
        Schema::dropIfExists('october_test_product_offer_stocks');
        Schema::dropIfExists('october_test_product_offer_stock_leads');
    }

    public function down()
    {
    }
};
