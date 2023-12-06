<?php

\DB::table('cms_blocks')->delete();

\DB::table('cms_blocks')->insert(array(
    0 =>
        array(
            'id' => 1,
            'name' => 'Pre Footer Block',
            'key' => 'pre-footer-block',
            'status' => 'active',
            'as_row' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        ),
    1 =>
        array(
            'id' => 2,
            'name' => 'Get Started with Istanbul Tours',
            'key' => 'get-started-with-istanbul-tours',
            'status' => 'active',
            'as_row' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-10-27 09:43:23',
        ),
    2 =>
        array(
            'id' => 4,
            'name' => 'Promo video',
            'key' => 'promo-video',
            'status' => 'active',
            'as_row' => 0,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-10-27 09:43:23',
        ),
    3 =>
        array(
            'id' => 5,
            'name' => 'Some Good Reasons',
            'key' => 'some-good-reasons',
            'status' => 'active',
            'as_row' => 0,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-10-27 09:43:23',
        ),
));

\DB::table('cms_widgets')->delete();

\DB::table('cms_widgets')->insert(array(
    0 =>
        array(
            'id' => 1,
            'title' => 'Free Worldwide Shipping',
            'widget_order' => 0,
            'widget_width' => 3,
            'content' => '<div class="text-center mb-30"><img
class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
src="/assets/themes/ecommerce-basic/img/services/01.png"
alt="Shipping">
<h6>Free Worldwide Shipping</h6>
<p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
</div>',
            'block_id' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        ),
    1 =>
        array(
            'id' => 2,
            'title' => 'Money Back Guarantee',
            'widget_order' => 1,
            'widget_width' => 3,
            'content' => '<div class="text-center mb-30"><img
class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
src="/assets/themes/ecommerce-basic/img/services/02.png"
alt="Money Back">
<h6>Money Back Guarantee</h6>
<p class="text-muted margin-bottom-none">We return money within 30 days</p>
</div>',
            'block_id' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        ),
    2 =>
        array(
            'id' => 3,
            'title' => '24/7 Customer Support',
            'widget_order' => 2,
            'widget_width' => 3,
            'content' => '<div class="text-center mb-30"><img
class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
src="/assets/themes/ecommerce-basic/img/services/03.png"
alt="Support">
<h6>24/7 Customer Support</h6>
<p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
</div>',
            'block_id' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        ),
    3 =>
        array(
            'id' => 4,
            'title' => 'Secure Online Payment',
            'widget_order' => 3,
            'widget_width' => 3,
            'content' => '<div class="text-center mb-30"><img
class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3"
src="/assets/themes/ecommerce-basic/img/services/04.png"
alt="Payment">
<h6>Secure Online Payment</h6>
<p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
</div>',
            'block_id' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        ),
    4 =>
        array(
            'id' => 5,
            'title' => 'Get started with Istanbul Tours image',
            'widget_order' => 0,
            'widget_width' => 6,
            'content' => '<p><img alt="Laptop" class="img-fluid laptop" src="/assets/themes/reservation-touring/img/laptop.png" /></p>',
            'block_id' => 2,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-11-09 09:21:19',
        ),
    5 =>
        array(
            'id' => 6,
            'title' => 'Get started with Istanbul Tours content',
            'widget_order' => 0,
            'widget_width' => 6,
            'content' => '<h3><span>Get started</span> with Istanbul Tours</h3>
<p>
Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor
imperdiet deterruisset.
</p>
<ul class="list_order">
<li><span>1</span>Select your preferred tours</li>
<li><span>2</span>Purchase tickets and options</li>
<li><span>3</span>Pick them directly from your office</li>
</ul>
<a href="{{url(\'tours\')}}" class="btn_1">Start now</a>',
            'block_id' => 2,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-11-03 08:36:49',
            'updated_at' => '2020-11-03 08:36:49',
        ),
    6 =>
        array(
            'id' => 7,
            'title' => 'promo-video',
            'widget_order' => 0,
            'widget_width' => NULL,
            'content' => '<section class="promo_full">
<div class="promo_full_wp magnific">
<div>
<h3>BELONG ANYWHERE</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
<a class="video" href="https://www.youtube.com/watch?v=WsHs93D4Vq0"><i class="icon-play-circled2-1"></i></a></div>
</div>
</section>',
            'block_id' => 4,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-11-03 08:57:00',
            'updated_at' => '2020-11-05 08:06:33',
        ),
    7 =>
        array(
            'id' => 8,
            'title' => 'some-good-reasons',
            'widget_order' => 0,
            'widget_width' => NULL,
            'content' => '<div class="main_title">
<h2>Some <span>good</span> reasons</h2>

<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
</div>

<div class="row">
<div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
<div class="feature_home"><i class="icon_set_1_icon-41"></i>

<h3><span>+120</span> Premium tours</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
<a class="btn_1 outline" href="{{url(\'about-us\')}}">Read more</a></div>
</div>

<div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
<div class="feature_home"><i class="icon_set_1_icon-30"></i>

<h3><span>+1000</span> Customers</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
<a class="btn_1 outline" href="{{url(\'about-us\')}}">Read more</a></div>
</div>

<div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
<div class="feature_home"><i class="icon_set_1_icon-57"></i>

<h3><span>H24 </span> Support</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
<a class="btn_1 outline" href="{{url(\'about-us\')}}">Read more</a></div>
</div>
</div>',
            'block_id' => 5,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => '2020-11-09 09:01:47',
            'updated_at' => '2020-11-09 09:22:40',
        ),
));

\DB::table('custom_field_settings')->delete();

\DB::table('custom_field_settings')->insert(array(
    0 =>
        array(
            'id' => 33,
            'model' => 'User',
            'fields' => '[{"name":"title","type":"select","status":"active","label":"Title","default_value":null,"validation_rules":null,"field_config":{"grid_class":null,"order":null},"options_setting":{"source":"database","source_model":"User","source_model_column":"email"}}]',
            'created_by' => 1,
            'updated_by' => 1,
            'properties' => NULL,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 09:58:24',
            'updated_at' => '2020-10-27 09:58:24',
        ),
    1 =>
        array(
            'id' => 48,
            'model' => 'ResService',
            'fields' => '[{"name":"address","type":"text","status":"active","label":"Address","default_value":null,"validation_rules":"required","field_config":{"grid_class":null,"order":null},"custom_attributes":[{"key":"id","value":"_autocomplete"}],"options_setting":{"source":null,"source_model":null,"source_model_column":null}},{"name":"lat","type":"hidden","status":"active","label":"lat","default_value":null,"validation_rules":"required","field_config":{"grid_class":null,"order":null},"custom_attributes":[{"key":"id","value":"lat"}],"options_setting":{"source":null,"source_model":null,"source_model_column":null}},{"name":"long","type":"hidden","status":"active","label":"long","default_value":null,"validation_rules":"required","field_config":{"grid_class":null,"order":null},"custom_attributes":[{"key":"id","value":"long"}],"options_setting":{"source":null,"source_model":null,"source_model_column":null}}]',
            'created_by' => 1,
            'updated_by' => 1,
            'properties' => NULL,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-27 12:07:07',
        ),
));

\DB::table('entity_entities')->delete();

\DB::table('entity_entities')->insert(array(
    0 =>
        array(
            'id' => 18,
            'code' => 'city-tour',
            'name_singular' => 'City Tour',
            'name_plural' => 'Istanbul Tours',
            'fields' => '{"6":{"name":"slug","type":"text","status":"active","field_config":{"full_text_search":["title","content"],"is_identifier":"on","searchable":"1","show_in_list":"1","grid_class":null,"order":"3"},"label":"slug","default_value":null,"validation_rules":"required","options_setting":{"source":null,"source_model":null,"source_model_column":null}},"0":{"name":"title","type":"text","status":"active","field_config":{"full_text_search":["title","content"],"is_identifier":"on","searchable":"1","sortable":"1","show_in_list":"1","grid_class":null,"order":null},"label":"Title","default_value":null,"validation_rules":"required","options_setting":{"source":null,"source_model":null,"source_model_column":null}},"1":{"name":"description","type":"textarea","status":"active","field_config":{"full_text_search":["title","content"],"searchable":"1","show_in_list":"1","grid_class":null,"order":null},"label":"Description","default_value":null,"validation_rules":"required","options_setting":{"source":null,"source_model":null,"source_model_column":null}},"2":{"name":"is_featured","type":"checkbox","status":"active","label":"Is featured?","default_value":null,"validation_rules":null,"field_config":{"searchable":"1","show_in_list":"1","grid_class":null,"order":null},"options_setting":{"source":null,"source_model":null,"source_model_column":null}},"3":{"name":"tour_period","type":"text","status":"active","label":"Tour Period","default_value":null,"validation_rules":"required","field_config":{"grid_class":null,"order":null},"options_setting":{"source":null,"source_model":null,"source_model_column":null}},"4":{"name":"service","type":"select","status":"active","label":"Service","default_value":null,"validation_rules":"required","field_config":{"grid_class":null,"order":null},"options_setting":{"source":"database","source_model":"ResService","source_model_column":"name"}},"5":{"name":"max_passengers","type":"number","status":"active","label":"Maximum Passengers","default_value":null,"validation_rules":"required","field_config":{"show_in_list":"1","grid_class":null,"order":null},"options_setting":{"source":null,"source_model":null,"source_model_column":null}},"7":{"name":"caption","type":"text","status":"active","label":"Caption","default_value":null,"validation_rules":"required","field_config":{"searchable":"1","grid_class":null,"order":null},"options_setting":{"source":null,"source_model":null,"source_model_column":null}}}',
            'has_tags' => 1,
            'has_gallery' => 1,
            'wishlistable' => 1,
            'reviewable' => 1,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-28 12:51:45',
        ),
));

\DB::table('entity_entries')->delete();

\DB::table('entity_entries')->insert(array(
    0 =>
        array(
            'id' => 6,
            'entity_id' => 18,
            'values' => '{"slug":"kiz-kulesi","title":"Kiz Kulesi","description":"The Maiden\'s Tower (Turkish: K\\u0131z Kulesi), also known as Leander\'s Tower (Tower of Leandros) since the medieval Byzantine period, is a tower on a small islet at the southern entrance of the Bosphorus strait 200 m (220 yd) from the coast of \\u00dcsk\\u00fcdar in Istanbul, Turkey.","is_featured":"1","tour_period":"3 hours","service":"492","max_passengers":"20","caption":"The Maiden\'s Tower (Turkish: K\\u0131z Kulesi), also known as Leander\'s Tower (Tower of Leandros) since the medieval Byzantine period"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:11:26',
            'updated_at' => '2020-10-28 13:07:40',
        ),
    1 =>
        array(
            'id' => 7,
            'entity_id' => 18,
            'values' => '{"slug":"galata-tower","title":"Galata Tower","description":"The nine-story tower is 66.90 m (219.5 ft) (62.59 m (205.3 ft) without the ornament on top, 51.65 m (169.5 ft) at the observation deck), and was the city\'s tallest structure when it was built. The elevation at ground level is 61 m (200 ft) above sea-level.","is_featured":"1","tour_period":"2 Hours","service":"491","max_passengers":"25","caption":"The nine-story tower is 66.90 m (219.5 ft) (62.59 m (205.3 ft) without the ornament on top, 51.65 m (169.5 ft) at the observation deck)"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:13:06',
            'updated_at' => '2020-10-28 13:07:22',
        ),
    2 =>
        array(
            'id' => 8,
            'entity_id' => 18,
            'values' => '{"slug":"sultanahmet","title":"Sultanahmet","description":"Ahmed Mosque (Turkish: Sultan Ahmet Camii), also known as the Blue Mosque, is an Ottoman-era mosque located in Istanbul, Turkey. A functioning mosque, it also attracts large numbers of tourist visitors. It was constructed between 1609 and 1616 during the rule of Ahmed I.","is_featured":"1","tour_period":"1 Hour","service":"490","max_passengers":"80","caption":"Ahmed Mosque (Turkish: Sultan Ahmet Camii), also known as the Blue Mosque, is an Ottoman-era mosque located in Istanbul,"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:16:50',
            'updated_at' => '2020-10-28 13:07:04',
        ),
    3 =>
        array(
            'id' => 9,
            'entity_id' => 18,
            'values' => '{"slug":"hagia-sophia","title":"Hagia Sophia","description":"The Hagia Sophia, whose name means \\u201choly wisdom,\\u201d is a domed monument originally built as a cathedral in Constantinople (now Istanbul, Turkey) in the sixth century A.D. It contains two floors centered on a giant nave that has a great dome ceiling, along with smaller domes, towering above.","tour_period":"2 Hours","service":"489","max_passengers":"60","caption":"The Hagia Sophia, whose name means \\u201choly wisdom,\\u201d is a domed monument originally built as a cathedral in Constantinople (now Istanbul, Turkey)"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:17:53',
            'updated_at' => '2020-10-28 13:06:48',
        ),
    4 =>
        array(
            'id' => 10,
            'entity_id' => 18,
            'values' => '{"slug":"dolmabahce-palace","title":"Dolmabah\\u00e7e Palace","description":"Dolmabah\\u00e7e is the largest palace in Turkey. It has an area of 45,000 m2 (11.1 acres), and contains 285 rooms, 46 halls, 6 baths (hamam) and 68 toilets. The design contains eclectic elements from the Baroque, Rococo and Neoclassical styles, blended with traditional Ottoman architecture to create a new synthesis.","tour_period":"4 Hours","service":"488","max_passengers":"50","caption":"Dolmabah\\u00e7e is the largest palace in Turkey. It has an area of 45,000 m2 (11.1 acres), and contains 285 rooms"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:33:52',
            'updated_at' => '2020-10-28 13:06:15',
        ),
    5 =>
        array(
            'id' => 11,
            'entity_id' => 18,
            'values' => '{"slug":"topkapi-sarayi","title":"Topkapi Sarayi","description":"The Topkap\\u0131 Palace (Turkish: Topkap\\u0131 Saray\\u0131; Ottoman Turkish: \\u0637\\u0648\\u067e\\u0642\\u067e\\u0648 \\u0633\\u0631\\u0627\\u064a\\u0649\\u200e, \\u1e6cop\\u1e33apu Sar\\u0101y\\u0131; meaning Cannon Gate Palace), or the Seraglio, is a large museum in the east of the Fatih district of Istanbul in Turkey. ... It was given the name Topkap\\u0131, meaning Cannon Gate, in the 19th century.","tour_period":"2 Hours","service":"487","max_passengers":"70","caption":"The Topkap\\u0131 Palace (Turkish: Topkap\\u0131 Saray\\u0131; Ottoman Turkish: \\u0637\\u0648\\u067e\\u0642\\u067e\\u0648 \\u0633\\u0631\\u0627\\u064a\\u0649\\u200e, \\u1e6cop\\u1e33apu Sar\\u0101y\\u0131; meaning Cannon Gate Palace), or the Seraglio, is a large"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:38:24',
            'updated_at' => '2020-11-02 12:54:27',
        ),
    6 =>
        array(
            'id' => 12,
            'entity_id' => 18,
            'values' => '{"slug":"panorama-1453-history-museum","title":"Panorama 1453 History Museum","description":"The Panorama 1453 Historical Museum is a historical museum in Istanbul that opened on 31 January 2009. This museum shows the conquering of the city of Constantinople, capital of the Byzantine Empire, by the troops of the Ottoman Sultan Mehmed the Conqueror on 29 May 1453.","tour_period":"3 Hours","service":"486","max_passengers":"45","caption":"The Panorama 1453 Historical Museum is a historical museum in Istanbul that opened on 31 January 2009."}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:40:16',
            'updated_at' => '2020-10-28 13:05:58',
        ),
    7 =>
        array(
            'id' => 13,
            'entity_id' => 18,
            'values' => '{"slug":"istanbul-sea-life-aquarium","title":"Istanbul Sea Life Aquarium","description":"At Sea Life Istanbul, you can walk through an outstanding 83 meters long ocean tunnel and get 270 degrees panoramic views of the sea bed while sea animals swim over your head, explore 21 thematic zones that include Clown-fish Alley","tour_period":"2 Hours","service":"485","max_passengers":"35","caption":"At Sea Life Istanbul, you can walk through an outstanding 83 meters"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:42:28',
            'updated_at' => '2020-10-28 13:05:38',
        ),
    8 =>
        array(
            'id' => 14,
            'entity_id' => 18,
            'values' => '{"slug":"faruk-yal\\u00e7\\u0131n-zoo-and-botanic-park","title":"Faruk Yal\\u00e7\\u0131n Zoo and Botanic Park","description":"FYZoo awaits you with over 400 species and over 8000 plant populations! You can meet species collections from various parts of the world and endangered species and listen to interesting stories of the plants, in the botanical tour with expert guides.","tour_period":"3 hours","service":"484","max_passengers":"60","caption":"FYZoo awaits you with over 400 species and over 8000 plant populations!"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:44:11',
            'updated_at' => '2020-10-28 13:05:12',
        ),
    9 =>
        array(
            'id' => 15,
            'entity_id' => 18,
            'values' => '{"slug":"bosphorus","title":"Bosphorus","description":"Bosphorus is a natural strait connecting the Black Sea to the Sea of Marmara, thus being a very strategic waterway. It was a river in the valley during the Tertiary period of the continents, which was drowned by the sea at the end of this period","is_featured":"1","tour_period":"3 Hours","service":"483","max_passengers":"50","caption":"Bosphorus is a natural strait connecting the Black Sea to the Sea of Marmara"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:47:17',
            'updated_at' => '2020-10-28 13:04:58',
        ),
    10 =>
        array(
            'id' => 16,
            'entity_id' => 18,
            'values' => '{"slug":"sent-Antuan-kilisesi","title":"Sent Antuan Kilisesi","description":"St. Anthony of Padua Church, alternatively known as the Sent Antuan Bazilikas\\u0131 or Sant\'Antonio di Padova Church, S. Antonio di Padova, St. Antoine, or locally as Sent Antuan, is a basilica and the largest church of the Roman Catholic Church in Istanbul, Turkey","tour_period":"3 hours","service":"493","max_passengers":"23","caption":"St. Anthony of Padua Church, alternatively known as the Sent Antuan Bazilikas\\u0131"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 11:57:31',
            'updated_at' => '2020-11-05 11:57:31',
        ),
    11 =>
        array(
            'id' => 17,
            'entity_id' => 18,
            'values' => '{"slug":"istanbul-metropolitan-municipality-telpher","title":"istanbul metropolitan municipality telpher","description":"Istanbul Metropolitan Municipality (IMM) holds a very important place in local administration organization of Istanbul. Its area of responsibility encompasses the entire provincial territory","tour_period":"5 Hours","service":"494","max_passengers":"42","caption":"Istanbul Metropolitan Municipality (IMM) holds a very important place"}',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:10:30',
            'updated_at' => '2020-11-05 12:10:30',
        ),
));

\DB::table('posts')->delete();


\Illuminate\Support\Facades\DB::table('posts')->updateOrInsert([
    'slug' => 'faqs'
],
    [
        'id' => 1,
        'title' => 'FAQs',
        'meta_keywords' => 'faqs',
        'meta_description' => 'FAQs',
        'content' => '<section class="gray-bg text-center">
<div class="container">
<div class="row">
<div class="col-md-12">
<h4 class="section-subtitle">Popular Questions</h4>

<p>Explore some of the best tips from around the city from our partners and friends.</p>
</div>
</div>
</div>
</section>',
        'properties' => NULL,
        'published' => 1,
        'published_at' => '2018-10-03 11:56:34',
        'private' => 0,
        'internal' => 0,
        'type' => 'page',
        'template' => 'full',
        'featured_image_link' => NULL,
        'extras' => NULL,
        'author_id' => 1,
        'created_by' => 1,
        'updated_by' => 1,
        'deleted_at' => NULL,
        'created_at' => '2020-10-26 07:19:46',
        'updated_at' => '2020-10-26 07:19:46',
    ]);

\Illuminate\Support\Facades\DB::table('posts')->updateOrInsert(['slug' => 'home',
], array(
    'id' => 8,
    'title' => 'Home',
    'meta_keywords' => 'home',
    'meta_description' => 'home',
    'content' => NULL,
    'properties' => NULL,
    'published' => 1,
    'published_at' => '2020-11-05 10:04:42',
    'private' => 0,
    'internal' => 0,
    'type' => 'page',
    'template' => 'home',
    'featured_image_link' => NULL,
    'extras' => NULL,
    'author_id' => 1,
    'created_by' => 1,
    'updated_by' => 1,
    'deleted_at' => NULL,
    'created_at' => '2020-10-26 07:29:25',
    'updated_at' => '2020-11-05 10:04:42',
));

\Illuminate\Support\Facades\DB::table('posts')->updateOrInsert(['slug' => 'blog',
], array(
    'id' => 9,
    'title' => 'Blog',
    'meta_keywords' => 'Blog',
    'meta_description' => 'Blog',
    'content' => '<div class="text-center">
<h2>Blog</h2>

<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
</div>',
    'properties' => NULL,
    'published' => 1,
    'published_at' => '2020-11-05 09:48:36',
    'private' => 0,
    'internal' => 0,
    'type' => 'page',
    'template' => 'full',
    'featured_image_link' => NULL,
    'extras' => NULL,
    'author_id' => 1,
    'created_by' => 1,
    'updated_by' => 1,
    'deleted_at' => NULL,
    'created_at' => '2020-10-26 07:29:25',
    'updated_at' => '2020-11-05 09:48:36',
));


\Illuminate\Support\Facades\DB::table('posts')->updateOrInsert(['slug' => 'contact-us'],
    array(
        'id' => 10,
        'title' => 'Contact Us',
        'slug' => 'contact-us',
        'meta_keywords' => 'Contact Us',
        'meta_description' => 'Contact Us',
        'content' => '<div>
<h2 style="text-align: center;">Drop Your Message</h2>

<p class="lead" style="text-align: center;">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>',
        'properties' => NULL,
        'published' => 1,
        'published_at' => '2020-11-05 09:46:36',
        'private' => 0,
        'internal' => 0,
        'type' => 'page',
        'template' => 'contact',
        'featured_image_link' => NULL,
        'extras' => NULL,
        'author_id' => 1,
        'created_by' => 1,
        'updated_by' => 1,
        'deleted_at' => NULL,
        'created_at' => '2020-10-26 07:29:25',
        'updated_at' => '2020-11-05 09:46:36',
    ));

\Illuminate\Support\Facades\DB::table('posts')->updateOrInsert(['slug' => 'subscription-commerce-trends-for-2018'],
    array(
        'id' => 11,
        'title' => 'Subscription Commerce Trends for 2018',
        'meta_keywords' => NULL,
        'meta_description' => NULL,
        'content' => '<p>Subscription commerce is ever evolving. A few years ago, who would have expected&nbsp;<a href="https://techcrunch.com/2017/10/10/porsche-launches-on-demand-subscription-for-its-sports-cars-and-suvs/" target="_blank">Porsche</a>&nbsp;to launch a subscription service? Or that monthly boxes of beauty samples or shaving supplies and&nbsp;<a href="https://www.pymnts.com/subscription-commerce/2017/how-over-the-top-services-came-out-on-top/" target="_blank">OTT services</a>&nbsp;would propel the subscription model to new heights? And how will these trends shape the subscription space going forward&mdash;and drive growth and innovation?</p>

<p>Regardless of your billing model, there&rsquo;s an opportunity for you to capitalize on many of the current trends in subscription commerce&mdash;trends that will help you to continue to compete and succeed in your industry.</p>

<h3><strong>What are these trends and how can you learn more?</strong></h3>

<p>These trends are outlined in our &ldquo;Top Ten Trends for 2018&rdquo; which we publish every year to help subscription businesses understand the drivers which may impact them in 2018 and beyond.</p>

<p>One trend, for example, is machine learning and data science which the payments industry is increasingly utilizing to deliver more powerful results for their customers.</p>

<p>Another trend which is driving new revenue is the adoption of a hybrid billing model&mdash; subscription businesses seamlessly sell one-time items and &lsquo;traditional&rsquo; businesses add a subscription component as a means to introduce a new revenue stream.</p>

<p>And while subscriber acquisition is not a new trend, there are some sophisticated ways to acquire new customers that subscription businesses are putting to work for increasingly positive effect.</p>

<p>Download this year&rsquo;s edition and see how these trends and insights can help your subscription business succeed in 2018.</p>

<p>&nbsp;</p>',
        'properties' => NULL,
        'published' => 1,
        'published_at' => '2017-12-04 11:18:23',
        'private' => 0,
        'internal' => 0,
        'type' => 'post',
        'template' => NULL,
        'featured_image_link' => NULL,
        'extras' => NULL,
        'author_id' => 1,
        'created_by' => 1,
        'updated_by' => 1,
        'deleted_at' => NULL,
        'created_at' => '2020-10-26 07:29:25',
        'updated_at' => '2020-10-26 07:29:25',
    )
);


\Illuminate\Support\Facades\DB::table('posts')
    ->updateOrInsert(['slug' => 'using-machine-learning-to-optimize-subscription-billing'],
        array(
            'id' => 12,
            'title' => 'Using Machine Learning to Optimize Subscription Billing',
            'meta_keywords' => NULL,
            'meta_description' => NULL,
            'content' => '<p>As a data scientist at Recurly, my job is to use the vast amount of data that we have collected to build products that make subscription businesses more successful. One way to think about data science at Recurly is as an extended R&amp;D department for our customers. We use a variety of tools and techniques, attack problems big and small, but at the end of the day, our goal is to put all of Recurly&rsquo;s expertise to work in service of your business.</p>

<p>Managing a successful subscription business requires a wide range of decisions. What is the optimum structure for subscription plans and pricing? What are the most effective subscriber acquisition methods? What are the most efficient collection methods for delinquent subscribers? What strategies will reduce churn and increase revenue?</p>

<p>At Recurly, we&#39;re focused on building the most flexible subscription management platform, a platform that provides a competitive advantage for your business. We reduce the complexity of subscription billing so you can focus on winning new subscribers and delighting current subscribers.</p>

<p>Recently, we turned to data science to tackle a big problem for subscription businesses: involuntary churn.</p>

<h3><strong>The Problem: The Retry Schedule</strong></h3>

<p>One of the most important factors in subscription commerce is subscriber retention. Every billing event needs to occur flawlessly to avoid adversely impacting the subscriber relationship or worse yet, to lose that subscriber to churn.</p>

<p>Every time a subscription comes up for renewal, Recurly creates an invoice and initiates a transaction using the customer&rsquo;s stored billing information, typically a credit card. Sometimes, this transaction is declined by the payment processor or the customer&rsquo;s bank. When this happens, Recurly sends reminder emails to the customer, checks with the Account Updater service to see if the customer&#39;s card has been updated, and also attempts to collect payment at various intervals over a period of time defined by the subscription business. The timing of these collection attempts is called the &ldquo;retry schedule.&rdquo;</p>

<p>Our ability to correct and successfully retry these cards prevents lost revenue, positively impacts your bottom line, and increases your customer retention rate.</p>

<p>Other subscription providers typically offer a static, one-size-fits-all retry schedule, or leave the schedule up to the subscription business, without providing any guidance. In contrast, Recurly can use machine learning to craft a retry schedule that is tailored to each individual invoice based on our historical data with hundreds of millions of transactions. Our approach gives each invoice the best chance of success, without any manual work by our customers.</p>

<p>A key component of Recurly&rsquo;s values is to test, learn and iterate. How did we call on those values to build this critical component of the Recurly platform?</p>

<h3><strong>Applying Machine Learning</strong></h3>

<p>We decided to use statistical models that leverage Recurly&rsquo;s data on transactions (hundreds of millions of transactions built up over years from a wide variety of different businesses) to predict which transactions are likely to succeed. Then, we used these models to craft the ideal retry schedule for each individual invoice. The process of building the models is known as machine learning.</p>

<p>The term &quot;machine learning&quot; encompasses many different processes and methods, but at its heart is an effort to go past explicitly programmed logic and allow a computer to arrive at the best logic on its own.</p>

<p>While humans are optimized for learning certain tasks&mdash;like how children can speak a new language after simply listening for a few months&mdash;computers can also be trained to learn patterns. Aggregating hundreds of millions of transactions to look for the patterns that lead to transaction success is a classic machine learning problem.</p>

<p>A typical machine learning project involves gathering data, training a statistical model on that data, and then evaluating the performance of the model when presented with new data. A model is only as good as the data it&rsquo;s trained on, and here we had a huge advantage.</p>',
            'properties' => NULL,
            'published' => 1,
            'published_at' => '2017-12-04 11:21:25',
            'private' => 0,
            'internal' => 0,
            'type' => 'post',
            'template' => NULL,
            'featured_image_link' => NULL,
            'extras' => NULL,
            'author_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-10-26 07:29:25',
        )
    );

\Illuminate\Support\Facades\DB::table('posts')
    ->updateOrInsert(['slug' => 'why-you-need-a-blog-subscription-landing-page'],
        array(
            'id' => 13,
            'title' => 'Why You Need A Blog Subscription Landing Page',
            'meta_keywords' => NULL,
            'meta_description' => NULL,
            'content' => '<p>Whether subscribing via email or RSS, your site visitor is individually volunteering to add your content to their day; a day that is already crowded with content from emails, texts, voicemails, site content, and even snail mail. &nbsp;</p>

<p>As a business, each time you receive a new blog subscriber, you have received validation or &quot;a vote&quot; that your audience has identified YOUR content as adding value to their day. With each new blog subscriber, your content is essentially being awarded as being highly relevant to conversations your readers are having on a regular basis.&nbsp;</p>

<p>To best promote the content your blog subscribers can expect to receive on an ongoing basis,&nbsp;<strong>consider adding a blog subscription landing page.&nbsp;</strong>This is a quick win that will help your company enhance the blogging subscription experience and help you measure and manage the success of this offer with analytical insight.</p>

<p>Holistically, your goal with this landing page is to provide visitors with a sneak preview of the experience they will receive by becoming a blog subscriber.<strong>&nbsp;Your blog subscription landing page should include:</strong></p>

<ul>
<li><strong>A high-level overview of topics, categories your blog will discuss.&nbsp;&nbsp;</strong>For example, HubSpot&#39;s blog covers &quot;all of the inbound marketing - SEO, Blogging, Social Media, Landing Pages, Lead Generation, and Analytics.&quot;</li>
<li><strong>Insight into &quot;who&quot; your blog will benefit.&nbsp;&nbsp;</strong>Examples may include HR Directors, Financial Business professionals, Animal Enthusiasts, etc.&nbsp; If your blog appeals to multiple personas, feel free to spell this out.&nbsp; This will help assure your visitor that they are joining a group of like-minded individuals who share their interests and goals.&nbsp;&nbsp;</li>
<li><strong>How your blog will help to drive the relevant conversation.&nbsp;</strong>Examples may include &quot;updates on industry events&quot;, &quot;expert editorials&quot;, &quot;insider tips&quot;, etc.&nbsp;&nbsp;</li>
</ul>

<p><strong>To create your blog subscription landing page, consider the following steps:</strong></p>

<p>1) Create your landing page following&nbsp;landing page best practices.&nbsp; Consider the &quot;subscribing to your blog&quot; offer as similar to other offers you promote using Landing Pages.&nbsp;</p>

<p>2) Create a Call To Action button that will link to this landing page.&nbsp; Use this button as a call to action within your blog articles or on other website pages to link to a blog subscription landing page&nbsp;Make sure your CTA button is supercharged!</p>

<p>3)&nbsp;Create a Thank You Page&nbsp;to complete the sign-up experience with gratitude and a follow-up call to action.&nbsp;</p>

<p>4) Measure the success of your blog subscription landing page.&nbsp;Consider the 3 Secrets to Optimizing Landing Page Copy.&nbsp;</p>

<p>For more information on Blogging Success Strategies,&nbsp;check out more Content Camp Resources and recorded webinars.&nbsp;</p>',
            'properties' => NULL,
            'published' => 1,
            'published_at' => '2017-12-04 11:33:19',
            'private' => 0,
            'internal' => 0,
            'type' => 'post',
            'template' => NULL,
            'featured_image_link' => NULL,
            'extras' => NULL,
            'author_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 07:29:25',
            'updated_at' => '2020-10-26 07:29:25',
        )
    );


\Illuminate\Support\Facades\DB::table('posts')
    ->updateOrInsert(['slug' => 'terms'],
        array(
            'id' => 14,
            'title' => 'Terms & Conditions',
            'slug' => 'terms',
            'meta_keywords' => 'terms',
            'meta_description' => 'Terms & Conditions',
            'content' => '<main>
<div class="container margin_60">

<div class="main_title">
<h2>Some <span>good </span>reasons</h2>
<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
</div>

<div class="row">
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
<div class="feature">
<i class="icon_set_1_icon-30"></i>
<h3><span>+ 1000</span> Customers</h3>
<p>
Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
</p>
</div>
</div>
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
<div class="feature">
<i class="icon_set_1_icon-41"></i>
<h3><span>+120</span> Premium Istanbul Tours</h3>
<p>
Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
</p>
</div>
</div>
</div>
<!-- End row -->
<div class="row">
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
<div class="feature">
<i class="icon_set_1_icon-57"></i>
<h3><span>H24</span> Support</h3>
<p>
Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
</p>
</div>
</div>
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.4s">
<div class="feature">
<i class="icon_set_1_icon-61"></i>
<h3><span>10 Languages</span> available</h3>
<p>
Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
</p>
</div>
</div>
</div>
</main>',
            'properties' => NULL,
            'published' => 1,
            'published_at' => '2018-10-03 11:56:34',
            'private' => 0,
            'internal' => 0,
            'type' => 'page',
            'template' => 'full',
            'featured_image_link' => NULL,
            'extras' => NULL,
            'author_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-10-26 07:19:46',
        )
    );


\Illuminate\Support\Facades\DB::table('posts')
    ->updateOrInsert(['slug' => 'about-us'],
        array(
            'id' => 15,
            'title' => 'About US',
            'slug' => 'about-us',
            'meta_keywords' => 'about-us',
            'meta_description' => 'About US',
            'content' => '<main>
<div class="container margin_60">
<div class="main_title">
<h2>Some <span>good </span>reasons</h2>

<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
</div>

<div class="row">
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
<div class="feature"><i class="icon_set_1_icon-30"></i>

<h3><span>+ 1000</span> Customers</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
</div>
</div>

<div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
<div class="feature"><i class="icon_set_1_icon-41"></i>

<h3><span>+120</span> Premium Istanbul Tours</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
</div>
</div>
</div>
<!-- End row -->

<div class="row">
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
<div class="feature"><i class="icon_set_1_icon-57"></i>

<h3><span>H24</span> Support</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
</div>
</div>

<div class="col-lg-6 wow fadeIn" data-wow-delay="0.4s">
<div class="feature"><i class="icon_set_1_icon-61"></i>

<h3><span>10 Languages</span> available</h3>

<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
</div>
</div>
</div>
</div>
</main>',
            'properties' => NULL,
            'published' => 1,
            'published_at' => '2020-11-05 09:47:54',
            'private' => 0,
            'internal' => 0,
            'type' => 'page',
            'template' => 'full',
            'featured_image_link' => NULL,
            'extras' => NULL,
            'author_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-11-05 09:47:54',
        )
    );

\Illuminate\Support\Facades\DB::table('posts')
    ->updateOrInsert(['slug' => 'tours'],
        array(
            'id' => 17,
            'title' => 'Tours',
            'meta_keywords' => 'tours',
            'meta_description' => 'Tours',
            'content' => '<div class="animated fadeInDown">
<h1>Tours</h1>
<p>İstanbul is a magical seal which unites Europe and Asia since the ancient times</p>
</div>',
            'properties' => NULL,
            'published' => 1,
            'published_at' => '2020-11-05 10:08:29',
            'private' => 0,
            'internal' => 0,
            'type' => 'page',
            'template' => NULL,
            'featured_image_link' => NULL,
            'extras' => NULL,
            'author_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 07:19:46',
            'updated_at' => '2020-11-05 10:08:29',
        )
    );


\DB::table('media')->delete();

\DB::table('media')->insert(array(
    3 =>
        array(
            'id' => 10,
            'model_type' => 'UtilityCategory',
            'model_id' => 7,
            'collection_name' => 'utility-category-thumbnail',
            'name' => 'download',
            'file_name' => 'download.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 8934,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 13,
            'created_at' => '2020-10-26 08:47:56',
            'updated_at' => '2020-10-26 08:47:56',
        ),
    4 =>
        array(
            'id' => 11,
            'model_type' => 'Entry',
            'model_id' => 6,
            'collection_name' => 'entry-gallery',
            'name' => 'Maiden_Tower_Turkey',
            'file_name' => 'Maiden_Tower_Turkey.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 427700,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 14,
            'created_at' => '2020-10-27 13:11:54',
            'updated_at' => '2020-10-27 13:11:54',
        ),
    5 =>
        array(
            'id' => 12,
            'model_type' => 'Entry',
            'model_id' => 7,
            'collection_name' => 'entry-gallery',
            'name' => 'galata-tower',
            'file_name' => 'galata-tower.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 322283,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 15,
            'created_at' => '2020-10-27 13:18:12',
            'updated_at' => '2020-10-27 13:18:12',
        ),
    6 =>
        array(
            'id' => 13,
            'model_type' => 'Entry',
            'model_id' => 8,
            'collection_name' => 'entry-gallery',
            'name' => 'sultan_ahmet',
            'file_name' => 'sultan_ahmet.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 174314,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 16,
            'created_at' => '2020-10-27 13:20:07',
            'updated_at' => '2020-10-27 13:20:07',
        ),
    7 =>
        array(
            'id' => 14,
            'model_type' => 'Entry',
            'model_id' => 9,
            'collection_name' => 'entry-gallery',
            'name' => 'ayasofia',
            'file_name' => 'ayasofia.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 683875,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 17,
            'created_at' => '2020-10-27 13:21:53',
            'updated_at' => '2020-10-27 13:21:53',
        ),
    8 =>
        array(
            'id' => 15,
            'model_type' => 'Entry',
            'model_id' => 10,
            'collection_name' => 'entry-gallery',
            'name' => 'dolmabahce-sarayi-hakkinda',
            'file_name' => 'dolmabahce-sarayi-hakkinda.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 241492,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 18,
            'created_at' => '2020-10-27 13:36:03',
            'updated_at' => '2020-10-27 13:36:03',
        ),
    9 =>
        array(
            'id' => 16,
            'model_type' => 'Entry',
            'model_id' => 11,
            'collection_name' => 'entry-gallery',
            'name' => 'topkapi',
            'file_name' => 'topkapi.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 177069,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 19,
            'created_at' => '2020-10-27 13:38:40',
            'updated_at' => '2020-10-27 13:38:40',
        ),
    10 =>
        array(
            'id' => 17,
            'model_type' => 'Entry',
            'model_id' => 14,
            'collection_name' => 'entry-gallery',
            'name' => 'faruk-yalcin-hayvanat',
            'file_name' => 'faruk-yalcin-hayvanat.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 53321,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 20,
            'created_at' => '2020-10-27 13:45:47',
            'updated_at' => '2020-10-27 13:45:47',
        ),
    11 =>
        array(
            'id' => 19,
            'model_type' => 'Entry',
            'model_id' => 15,
            'collection_name' => 'entry-gallery',
            'name' => 'bosphorus',
            'file_name' => 'bosphorus.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 171941,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 21,
            'created_at' => '2020-10-27 13:48:15',
            'updated_at' => '2020-10-27 13:48:15',
        ),
    12 =>
        array(
            'id' => 20,
            'model_type' => 'Entry',
            'model_id' => 13,
            'collection_name' => 'entry-gallery',
            'name' => 'sea-life-aquarium',
            'file_name' => 'sea-life-aquarium.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 125970,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 22,
            'created_at' => '2020-10-28 05:44:27',
            'updated_at' => '2020-10-28 05:44:27',
        ),
    13 =>
        array(
            'id' => 21,
            'model_type' => 'Entry',
            'model_id' => 12,
            'collection_name' => 'entry-gallery',
            'name' => 'Panorama_1453_History_Museum_6',
            'file_name' => 'Panorama_1453_History_Museum_6.JPG',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 157140,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 23,
            'created_at' => '2020-10-28 05:50:18',
            'updated_at' => '2020-10-28 05:50:18',
        ),
    14 =>
        array(
            'id' => 22,
            'model_type' => 'Corals\\Modules\\CMS\\Models\\Page',
            'model_id' => 10,
            'collection_name' => 'featured-image',
            'name' => 'istanbul',
            'file_name' => 'istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 203002,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 24,
            'created_at' => '2020-11-05 09:46:36',
            'updated_at' => '2020-11-05 09:46:36',
        ),
    15 =>
        array(
            'id' => 23,
            'model_type' => 'Corals\\Modules\\CMS\\Models\\Page',
            'model_id' => 15,
            'collection_name' => 'featured-image',
            'name' => 'istanbul',
            'file_name' => 'istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 203002,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 25,
            'created_at' => '2020-11-05 09:47:54',
            'updated_at' => '2020-11-05 09:47:54',
        ),
    16 =>
        array(
            'id' => 24,
            'model_type' => 'Corals\\Modules\\CMS\\Models\\Page',
            'model_id' => 9,
            'collection_name' => 'featured-image',
            'name' => 'istanbul',
            'file_name' => 'istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 203002,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 26,
            'created_at' => '2020-11-05 09:48:36',
            'updated_at' => '2020-11-05 09:48:36',
        ),
    17 =>
        array(
            'id' => 25,
            'model_type' => 'Corals\\Modules\\CMS\\Models\\Page',
            'model_id' => 8,
            'collection_name' => 'featured-image',
            'name' => 'istanbul',
            'file_name' => 'istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 203002,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 27,
            'created_at' => '2020-11-05 09:50:45',
            'updated_at' => '2020-11-05 09:50:45',
        ),
    18 =>
        array(
            'id' => 26,
            'model_type' => 'Corals\\Modules\\CMS\\Models\\Page',
            'model_id' => 17,
            'collection_name' => 'featured-image',
            'name' => 'istanbul',
            'file_name' => 'istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 203002,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 28,
            'created_at' => '2020-11-05 10:02:18',
            'updated_at' => '2020-11-05 10:02:18',
        ),
    19 =>
        array(
            'id' => 27,
            'model_type' => 'Entry',
            'model_id' => 16,
            'collection_name' => 'entry-gallery',
            'name' => 'sent-Antuan-kilisesi',
            'file_name' => 'sent-Antuan-kilisesi.jpeg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 135626,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 29,
            'created_at' => '2020-11-05 12:03:21',
            'updated_at' => '2020-11-05 12:03:21',
        ),
    20 =>
        array(
            'id' => 29,
            'model_type' => 'Entry',
            'model_id' => 17,
            'collection_name' => 'entry-gallery',
            'name' => 'Teleferik_istanbul',
            'file_name' => 'Teleferik_istanbul.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 'media',
            'size' => 196699,
            'manipulations' => '[]',
            'custom_properties' => '{"root":"user_v1oz1Yz27j"}',
            'responsive_images' => '[]',
            'order_column' => 30,
            'created_at' => '2020-11-05 12:32:00',
            'updated_at' => '2020-11-05 12:32:00',
        ),
));

\DB::table('res_line_items')->delete();

\DB::table('res_line_items')->insert(array(
    0 =>
        array(
            'id' => 2771,
            'code' => 'bosphorus_touring_fee',
            'name' => 'Bosphorus Touring Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '15.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Bosphorus Touring Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:19:51',
            'updated_at' => '2020-10-27 12:24:50',
        ),
    1 =>
        array(
            'id' => 2772,
            'code' => 'kiz_kulesi_fee',
            'name' => 'Kiz Kulesi Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '10.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Kiz Kulesi Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:31:12',
            'updated_at' => '2020-10-27 12:31:12',
        ),
    2 =>
        array(
            'id' => 2773,
            'code' => 'galata_tower_fee',
            'name' => 'Galata Tower Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '19.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Galata Tower Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:32:03',
            'updated_at' => '2020-10-27 12:38:03',
        ),
    3 =>
        array(
            'id' => 2774,
            'code' => 'sultan_ahmet',
            'name' => 'Sulatan Ahmet Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '17.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Sulatan Ahmet Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:32:45',
            'updated_at' => '2020-10-27 12:32:45',
        ),
    4 =>
        array(
            'id' => 2775,
            'code' => 'hagia_sophia_fee',
            'name' => 'Hagia Sophia Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '25.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Hagia Sophia Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:33:41',
            'updated_at' => '2020-10-27 12:33:41',
        ),
    5 =>
        array(
            'id' => 2776,
            'code' => 'dolmabahÃƒÂ§e_palace_fee',
            'name' => 'DolmabahÃƒÂ§e Palace Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '35.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'DolmabahÃƒÂ§e Palace Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:34:57',
            'updated_at' => '2020-10-27 12:34:57',
        ),
    6 =>
        array(
            'id' => 2777,
            'code' => 'topkapi_sarayi_fee',
            'name' => 'Topkapi Sarayi Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '20.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Topkapi Sarayi Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:36:04',
            'updated_at' => '2020-10-27 12:36:04',
        ),
    7 =>
        array(
            'id' => 2778,
            'code' => 'panorama_1453_history_museum_fee',
            'name' => 'Panorama 1453 History Museum',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '8.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Panorama 1453 History Museum',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:37:39',
            'updated_at' => '2020-10-27 12:37:39',
        ),
    8 =>
        array(
            'id' => 2779,
            'code' => 'istanbul_Sea_life_aquarium',
            'name' => 'Istanbul Sea Life Aquarium Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '50.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Istanbul Sea Life Aquarium Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:39:59',
            'updated_at' => '2020-10-27 12:39:59',
        ),
    9 =>
        array(
            'id' => 2780,
            'code' => 'faruk_YalÃƒÂ§Ã„Â±n_zoo_and_botanic_park_fee',
            'name' => 'Faruk YalÃƒÂ§Ã„Â±n Zoo and Botanic Park Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '28.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'Faruk YalÃƒÂ§Ã„Â±n Zoo and Botanic Park Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:42:03',
            'updated_at' => '2020-10-27 12:42:03',
        ),
    10 =>
        array(
            'id' => 2781,
            'code' => 'sent_Antuan_kilisesi_fee',
            'name' => 'sent Antuan kilisesi Fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '23.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'sent Antuan kilisesi Fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 11:55:17',
            'updated_at' => '2020-11-05 11:56:09',
        ),
    11 =>
        array(
            'id' => 2782,
            'code' => 'istanbul_metropolitan_municipality_telpher_fee',
            'name' => 'istanbul metropolitan municipality telpher fee',
            'status' => 'active',
            'owner_type' => 'User',
            'owner_id' => 1,
            'rate_type' => 'fixed',
            'rate_value' => '31.00',
            'min_qty' => 0,
            'max_qty' => 0,
            'description' => 'istanbul metropolitan municipality telpher fee',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:07:49',
            'updated_at' => '2020-11-05 12:07:49',
        ),
));

\DB::table('res_model_has_line_items')->delete();

\DB::table('res_model_has_line_items')->insert(array(
    0 =>
        array(
            'id' => 2765,
            'line_item_id' => 2771,
            'model_type' => 'ResService',
            'model_id' => 483,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    1 =>
        array(
            'id' => 2766,
            'line_item_id' => 2780,
            'model_type' => 'ResService',
            'model_id' => 484,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    2 =>
        array(
            'id' => 2767,
            'line_item_id' => 2779,
            'model_type' => 'ResService',
            'model_id' => 485,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    3 =>
        array(
            'id' => 2768,
            'line_item_id' => 2778,
            'model_type' => 'ResService',
            'model_id' => 486,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    4 =>
        array(
            'id' => 2769,
            'line_item_id' => 2777,
            'model_type' => 'ResService',
            'model_id' => 487,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    5 =>
        array(
            'id' => 2770,
            'line_item_id' => 2776,
            'model_type' => 'ResService',
            'model_id' => 488,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    6 =>
        array(
            'id' => 2771,
            'line_item_id' => 2775,
            'model_type' => 'ResService',
            'model_id' => 489,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    7 =>
        array(
            'id' => 2772,
            'line_item_id' => 2774,
            'model_type' => 'ResService',
            'model_id' => 490,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    8 =>
        array(
            'id' => 2773,
            'line_item_id' => 2773,
            'model_type' => 'ResService',
            'model_id' => 491,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    9 =>
        array(
            'id' => 2774,
            'line_item_id' => 2772,
            'model_type' => 'ResService',
            'model_id' => 492,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    10 =>
        array(
            'id' => 2775,
            'line_item_id' => 2781,
            'model_type' => 'ResService',
            'model_id' => 493,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
    11 =>
        array(
            'id' => 2776,
            'line_item_id' => 2782,
            'model_type' => 'ResService',
            'model_id' => 494,
            'is_main_line_item' => 1,
            'properties' => NULL,
            'created_by' => NULL,
            'updated_by' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
        ),
));

\DB::table('res_services')->delete();

\DB::table('res_services')->insert(array(
    0 =>
        array(
            'id' => 483,
            'code' => 'SER-000001',
            'name' => 'Bosphorus Tourism',
            'description' => 'Bosphorus Tourism',
            'caption' => 'Bosphorus Tourism',
            'slot_in_minutes' => '300.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Ortak\\u00f6y, 15 Temmuz \\u015eehitler K\\u00f6pr\\u00fcs\\u00fc, Be\\u015fikta\\u015f\\/\\u0130stanbul, Turkey","lat":"41.0486843","long":"29.0309389"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    1 =>
        array(
            'id' => 484,
            'code' => 'SER-000484',
            'name' => 'Faruk YalÃƒÂ§Ã„Â±n Zoo and Botanic Park Tourism',
            'description' => 'Faruk YalÃƒÂ§Ã„Â±n Zoo and Botanic Park Touring',
            'caption' => 'Faruk YalÃƒÂ§Ã„Â±n Zoo and Botanic Park Touring',
            'slot_in_minutes' => '297.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Bayramo\\u011flu, Faruk Yal\\u00e7\\u0131n Caddesi, Dar\\u0131ca\\/Kocaeli, Turkey","lat":"40.787719","long":"29.353703"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    2 =>
        array(
            'id' => 485,
            'code' => 'SER-000485',
            'name' => 'Istanbul Sea Life Aquarium Tourism',
            'description' => 'Istanbul Sea Life Aquarium Tourism',
            'caption' => 'Istanbul Sea Life Aquarium Tourism',
            'slot_in_minutes' => '450.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Kocatepe, Bayrampa\\u015fa\\/\\u0130stanbul, Turkey","lat":"41.05285550000001","long":"28.8917187"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    3 =>
        array(
            'id' => 486,
            'code' => 'SER-000486',
            'name' => 'Panorama 1453 History Museum Tourism',
            'description' => 'Panorama 1453 History Museum Tourism',
            'caption' => 'Panorama 1453 History Museum Tourism',
            'slot_in_minutes' => '450.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Topkap\\u0131, Fatih\\/\\u0130stanbul, Turkey","lat":"41.0200892","long":"28.9310295"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    4 =>
        array(
            'id' => 487,
            'code' => 'SER-000487',
            'name' => 'Topkapi Sarayi Tourism',
            'description' => 'Topkapi Sarayi Tourism',
            'caption' => 'Topkapi Sarayi Tourism',
            'slot_in_minutes' => '450.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Cankurtaran, Topkap\\u0131 Saray\\u0131, Fatih\\/\\u0130stanbul, Turkey","lat":"41.0104199","long":"28.9823662"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    5 =>
        array(
            'id' => 488,
            'code' => 'SER-000488',
            'name' => 'DolmabahÃƒÂ§e Palace Tourism',
            'description' => 'DolmabahÃƒÂ§e Palace',
            'caption' => 'DolmabahÃƒÂ§e Palace',
            'slot_in_minutes' => '301.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Vi\\u015fnezade, Dolmabah\\u00e7e Cd., 34357 Be\\u015fikta\\u015f\\/\\u0130stanbul, Turkey","lat":"41.0399839","long":"28.9989567"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 13:31:38',
        ),
    6 =>
        array(
            'id' => 489,
            'code' => 'SER-000489',
            'name' => 'Hagia Sophia Tourism',
            'description' => 'Hagia Sophia Tourism',
            'caption' => 'Hagia Sophia Tourism',
            'slot_in_minutes' => '240.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Sultan Ahmet, Fatih\\/\\u0130stanbul, Turkey","lat":"41.0042322","long":"28.9783349"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 13:09:38',
        ),
    7 =>
        array(
            'id' => 490,
            'code' => 'SER-000490',
            'name' => 'Sulatan Ahmet Tourism',
            'description' => 'Sulatan Ahmet Tourism',
            'caption' => 'Sulatan Ahmet Tourism',
            'slot_in_minutes' => '480.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Sultan Ahmet, Sultan Ahmet Cami, Fatih\\/\\u0130stanbul, Turkey","lat":"41.0058216","long":"28.9772557"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    8 =>
        array(
            'id' => 491,
            'code' => 'SER-000491',
            'name' => 'Galata Tower Tourism',
            'description' => 'Galata Tower Tourism',
            'caption' => 'Galata Tower Tourism',
            'slot_in_minutes' => '600.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Bereketzade, Galata Kulesi, Beyo\\u011flu\\/\\u0130stanbul, Turkey","lat":"41.02575820000001","long":"28.9742289"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    9 =>
        array(
            'id' => 492,
            'code' => 'SER-000492',
            'name' => 'Kiz Kulesi Tourism',
            'description' => 'Kiz Kulesi Tourism',
            'caption' => 'Kiz Kulesi Tourism',
            'slot_in_minutes' => '360.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Salacak, Salacak \\u0130skele Caddesi, \\u00dcsk\\u00fcdar\\/\\u0130stanbul, Turkey","lat":"41.019953","long":"29.0095876"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    10 =>
        array(
            'id' => 493,
            'code' => 'SER-000493',
            'name' => 'Sent Antuan Kilisesi Tour',
            'description' => 'Sent Antuan Kilisesi Tour',
            'caption' => 'Sent Antuan Kilisesi Tour',
            'slot_in_minutes' => '600.00',
            'status' => 'active',
            'object_type' => NULL,
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Tomtom, Istiklal Cd. No:171, 34433 Beyo\\u011flu\\/\\u0130stanbul, Turkey","lat":"41.0323076","long":"28.9771334"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 11:56:56',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    11 =>
        array(
            'id' => 494,
            'code' => 'SER-000494',
            'name' => 'istanbul metropolitan municipality telpher tour',
            'description' => 'istanbul metropolitan municipality telpher tour',
            'caption' => 'istanbul metropolitan municipality telpher tour',
            'slot_in_minutes' => '600.00',
            'status' => 'active',
            'object_type' => 'User',
            'owner_type' => 'User',
            'owner_id' => 1,
            'require_confirmation' => 0,
            'properties' => '{"entity_id":null,"address":"Ey\\u00fcp Merkez, Bahariye Cd. No:5, 34050 Ey\\u00fcpsultan\\/\\u0130stanbul, Turkey","lat":"41.049845","long":"28.9343406"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
));

\DB::table('utility_attributes')->delete();

\DB::table('utility_attributes')->insert(array(
    0 =>
        array(
            'id' => 1,
            'type' => 'checkbox',
            'label' => 'pet allowed',
            'display_order' => 0,
            'use_as_filter' => 0,
            'required' => 0,
            'properties' => '{"icon":null}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 09:40:39',
            'updated_at' => '2020-10-26 09:40:39',
        ),
    1 =>
        array(
            'id' => 2,
            'type' => 'text',
            'label' => 'size',
            'display_order' => 0,
            'use_as_filter' => 0,
            'required' => 0,
            'properties' => '{"icon":null}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-26 09:56:31',
            'updated_at' => '2020-10-26 09:56:31',
        ),
    2 =>
        array(
            'id' => 3,
            'type' => 'multi_values',
            'label' => 'Countries',
            'display_order' => 0,
            'use_as_filter' => 0,
            'required' => 0,
            'properties' => '{"icon":null}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 07:38:09',
            'updated_at' => '2020-10-27 08:03:11',
        ),
));

\DB::table('utility_categories')->delete();

\DB::table('utility_categories')->insert(array(
    0 =>
        array(
            'id' => 212,
            'name' => 'Istanbul Tours Category',
            'slug' => 'city-tours-category',
            'description' => 'Parent City Touring Categories',
            'module' => 'Reservation',
            'parent_id' => NULL,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-27 12:07:07',
        ),
    1 =>
        array(
            'id' => 213,
            'name' => 'City sightseeing',
            'slug' => 'city-sightseeing',
            'description' => 'City sightseeing Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/sightseeing.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-27 12:07:07',
        ),
    2 =>
        array(
            'id' => 214,
            'name' => 'Museum tours',
            'slug' => 'museum-tours',
            'description' => 'Museum tours Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/museums.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-27 12:07:07',
        ),
    3 =>
        array(
            'id' => 215,
            'name' => 'Historic Buildings',
            'slug' => 'historic-buildings',
            'description' => 'Historic Buildings Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/historic.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:07',
            'updated_at' => '2020-10-27 12:07:07',
        ),
    4 =>
        array(
            'id' => 216,
            'name' => 'Walking tours',
            'slug' => 'walking-tours',
            'description' => 'Walking tours Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/walking.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    5 =>
        array(
            'id' => 217,
            'name' => 'Eat & Drink',
            'slug' => 'eat-drink',
            'description' => 'Eat & Drink Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/eat.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    6 =>
        array(
            'id' => 218,
            'name' => 'Churces',
            'slug' => 'churces',
            'description' => 'Churces Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/churches.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    7 =>
        array(
            'id' => 219,
            'name' => 'Skyline tours',
            'slug' => 'skyline-tours',
            'description' => 'Skyline tours Category',
            'module' => 'Reservation',
            'parent_id' => 212,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":"\\/assets\\/themes\\/reservation-touring\\/img\\/icons_search\\/skyline.png"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    8 =>
        array(
            'id' => 220,
            'name' => 'services_categories',
            'slug' => 'services-categories',
            'description' => 'Parent Services Categories',
            'module' => 'Reservation',
            'parent_id' => NULL,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:13:19',
            'updated_at' => '2020-10-27 12:13:19',
        ),
    9 =>
        array(
            'id' => 222,
            'name' => 'Tourism',
            'slug' => 'tourism',
            'description' => NULL,
            'module' => NULL,
            'parent_id' => 220,
            'status' => 'active',
            'is_featured' => 0,
            'properties' => '{"thumbnail_link":null}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:17:50',
            'updated_at' => '2020-10-27 12:17:50',
        ),
));

\DB::table('utility_model_attribute_options')->delete();

\DB::table('utility_model_attribute_options')->insert(array(
    0 =>
        array(
            'id' => 40,
            'attribute_id' => 1,
            'attribute_option_id' => NULL,
            'model_id' => 2,
            'model_type' => 'Entry',
            'properties' => NULL,
            'string_value' => '1',
            'number_value' => NULL,
            'text_value' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 08:32:18',
            'updated_at' => '2020-10-27 08:32:18',
        ),
    1 =>
        array(
            'id' => 41,
            'attribute_id' => 3,
            'attribute_option_id' => NULL,
            'model_id' => 2,
            'model_type' => 'Entry',
            'properties' => NULL,
            'string_value' => NULL,
            'number_value' => 1.0,
            'text_value' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 08:32:18',
            'updated_at' => '2020-10-27 08:32:18',
        ),
    2 =>
        array(
            'id' => 42,
            'attribute_id' => 3,
            'attribute_option_id' => NULL,
            'model_id' => 2,
            'model_type' => 'Entry',
            'properties' => NULL,
            'string_value' => NULL,
            'number_value' => 2.0,
            'text_value' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 08:32:18',
            'updated_at' => '2020-10-27 08:32:18',
        ),
    3 =>
        array(
            'id' => 43,
            'attribute_id' => 2,
            'attribute_option_id' => NULL,
            'model_id' => 2,
            'model_type' => 'Entry',
            'properties' => NULL,
            'string_value' => '555',
            'number_value' => NULL,
            'text_value' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 08:32:18',
            'updated_at' => '2020-10-27 08:32:18',
        ),
));

\DB::table('utility_model_has_category')->delete();

\DB::table('utility_model_has_category')->insert(array(
    0 =>
        array(
            'model_id' => 18,
            'model_type' => 'Entity',
            'category_id' => 212,
        ),
    1 =>
        array(
            'model_id' => 483,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    2 =>
        array(
            'model_id' => 484,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    3 =>
        array(
            'model_id' => 485,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    4 =>
        array(
            'model_id' => 486,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    5 =>
        array(
            'model_id' => 487,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    6 =>
        array(
            'model_id' => 488,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    7 =>
        array(
            'model_id' => 489,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    8 =>
        array(
            'model_id' => 490,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    9 =>
        array(
            'model_id' => 491,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    10 =>
        array(
            'model_id' => 492,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    11 =>
        array(
            'model_id' => 6,
            'model_type' => 'Entry',
            'category_id' => 217,
        ),
    12 =>
        array(
            'model_id' => 7,
            'model_type' => 'Entry',
            'category_id' => 213,
        ),
    13 =>
        array(
            'model_id' => 8,
            'model_type' => 'Entry',
            'category_id' => 214,
        ),
    14 =>
        array(
            'model_id' => 9,
            'model_type' => 'Entry',
            'category_id' => 214,
        ),
    15 =>
        array(
            'model_id' => 10,
            'model_type' => 'Entry',
            'category_id' => 215,
        ),
    16 =>
        array(
            'model_id' => 11,
            'model_type' => 'Entry',
            'category_id' => 215,
        ),
    17 =>
        array(
            'model_id' => 12,
            'model_type' => 'Entry',
            'category_id' => 214,
        ),
    18 =>
        array(
            'model_id' => 13,
            'model_type' => 'Entry',
            'category_id' => 216,
        ),
    19 =>
        array(
            'model_id' => 14,
            'model_type' => 'Entry',
            'category_id' => 216,
        ),
    20 =>
        array(
            'model_id' => 15,
            'model_type' => 'Entry',
            'category_id' => 216,
        ),
    21 =>
        array(
            'model_id' => 493,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    22 =>
        array(
            'model_id' => 16,
            'model_type' => 'Entry',
            'category_id' => 218,
        ),
    23 =>
        array(
            'model_id' => 494,
            'model_type' => 'ResService',
            'category_id' => 222,
        ),
    24 =>
        array(
            'model_id' => 17,
            'model_type' => 'Entry',
            'category_id' => 219,
        ),
));

\DB::table('utility_tags')->delete();

\DB::table('utility_tags')->insert(array(
    0 =>
        array(
            'id' => 22,
            'name' => 'Pet allowed',
            'slug' => 'pet-allowed',
            'status' => 'active',
            'module' => 'Reservation',
            'properties' => '{"icon":"icon_set_1_icon-22"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    1 =>
        array(
            'id' => 23,
            'name' => 'Audio guide',
            'slug' => 'audio-guide',
            'status' => 'active',
            'module' => 'Reservation',
            'properties' => '{"icon":"icon_set_1_icon-97"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    2 =>
        array(
            'id' => 24,
            'name' => 'Tour guide',
            'slug' => 'tour-guide',
            'status' => 'active',
            'module' => 'Reservation',
            'properties' => '{"icon":"icon_set_1_icon-29"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
    3 =>
        array(
            'id' => 25,
            'name' => 'Accessibiliy',
            'slug' => 'accessibiliy',
            'status' => 'active',
            'module' => 'Reservation',
            'properties' => '{"icon":"icon_set_1_icon-13"}',
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:07:08',
            'updated_at' => '2020-10-27 12:07:08',
        ),
));

\DB::table('utility_taggables')->delete();

\DB::table('utility_taggables')->insert(array(
    0 =>
        array(
            'tag_id' => 22,
            'taggable_id' => 6,
            'taggable_type' => 'Entry',
        ),
    1 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 6,
            'taggable_type' => 'Entry',
        ),
    2 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 6,
            'taggable_type' => 'Entry',
        ),
    3 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 6,
            'taggable_type' => 'Entry',
        ),
    4 =>
        array(
            'tag_id' => 22,
            'taggable_id' => 7,
            'taggable_type' => 'Entry',
        ),
    5 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 7,
            'taggable_type' => 'Entry',
        ),
    6 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 7,
            'taggable_type' => 'Entry',
        ),
    7 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 7,
            'taggable_type' => 'Entry',
        ),
    8 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 8,
            'taggable_type' => 'Entry',
        ),
    9 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 8,
            'taggable_type' => 'Entry',
        ),
    10 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 8,
            'taggable_type' => 'Entry',
        ),
    11 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 9,
            'taggable_type' => 'Entry',
        ),
    12 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 9,
            'taggable_type' => 'Entry',
        ),
    13 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 10,
            'taggable_type' => 'Entry',
        ),
    14 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 10,
            'taggable_type' => 'Entry',
        ),
    15 =>
        array(
            'tag_id' => 22,
            'taggable_id' => 12,
            'taggable_type' => 'Entry',
        ),
    16 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 12,
            'taggable_type' => 'Entry',
        ),
    17 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 12,
            'taggable_type' => 'Entry',
        ),
    18 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 12,
            'taggable_type' => 'Entry',
        ),
    19 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 13,
            'taggable_type' => 'Entry',
        ),
    20 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 13,
            'taggable_type' => 'Entry',
        ),
    21 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 13,
            'taggable_type' => 'Entry',
        ),
    22 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 16,
            'taggable_type' => 'Entry',
        ),
    23 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 16,
            'taggable_type' => 'Entry',
        ),
    24 =>
        array(
            'tag_id' => 22,
            'taggable_id' => 17,
            'taggable_type' => 'Entry',
        ),
    25 =>
        array(
            'tag_id' => 23,
            'taggable_id' => 17,
            'taggable_type' => 'Entry',
        ),
    26 =>
        array(
            'tag_id' => 24,
            'taggable_id' => 17,
            'taggable_type' => 'Entry',
        ),
    27 =>
        array(
            'tag_id' => 25,
            'taggable_id' => 17,
            'taggable_type' => 'Entry',
        ),
));


\DB::table('settings')
    ->where('code', 'site_name')
    ->update([
        'value' => 'İSTANBUL TOURS'
    ]);

\DB::table('settings')
    ->where('code', 'utility_google_address_country')
    ->update([
        'value' => 'TR'
    ]);


\DB::table('settings')
    ->where('code', 'login_background')
    ->update([
        'value' => 'height: auto;
	display: block;
	text-transform: none;
	font-size: 12px;
	background: url(/assets/themes/reservation-touring/img/istanbul.jpg) no-repeat center center;
	background-size: cover;'
    ]);


\DB::table('settings')->updateOrInsert([
    'code' => 'operational_time',
    'type' => 'TEXTAREA',
    'category' => 'General',
    'label' => 'Operational Time',
    'value' => 'Monday to Friday 9.00am - 7.30pm',
    'editable' => 1,
    'hidden' => 0,
    'properties' => NULL,
    'created_by' => 1,
    'updated_by' => 1,
    'deleted_at' => NULL,
    'created_at' => '2020-11-09 10:37:20',
    'updated_at' => '2020-11-09 10:39:24',
]);


\DB::table('utility_schedules')->delete();

\DB::table('utility_schedules')->insert(array(
    0 =>
        array(
            'id' => 3368,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    1 =>
        array(
            'id' => 3369,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    2 =>
        array(
            'id' => 3370,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    3 =>
        array(
            'id' => 3371,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    4 =>
        array(
            'id' => 3372,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    5 =>
        array(
            'id' => 3373,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    6 =>
        array(
            'id' => 3374,
            'user_id' => 1,
            'scheduleable_id' => 483,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '09:00:00',
            'end_time' => '14:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:29:44',
            'updated_at' => '2020-10-27 13:08:16',
        ),
    7 =>
        array(
            'id' => 3375,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    8 =>
        array(
            'id' => 3376,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    9 =>
        array(
            'id' => 3377,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    10 =>
        array(
            'id' => 3378,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    11 =>
        array(
            'id' => 3379,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    12 =>
        array(
            'id' => 3380,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    13 =>
        array(
            'id' => 3381,
            'user_id' => 1,
            'scheduleable_id' => 484,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:45:45',
            'updated_at' => '2020-10-27 13:09:20',
        ),
    14 =>
        array(
            'id' => 3382,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    15 =>
        array(
            'id' => 3383,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    16 =>
        array(
            'id' => 3384,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    17 =>
        array(
            'id' => 3385,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    18 =>
        array(
            'id' => 3386,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    19 =>
        array(
            'id' => 3387,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '09:00:00',
            'end_time' => '09:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 13:09:24',
        ),
    20 =>
        array(
            'id' => 3388,
            'user_id' => 1,
            'scheduleable_id' => 485,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:49:17',
            'updated_at' => '2020-10-27 12:49:17',
        ),
    21 =>
        array(
            'id' => 3389,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    22 =>
        array(
            'id' => 3390,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    23 =>
        array(
            'id' => 3391,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    24 =>
        array(
            'id' => 3392,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    25 =>
        array(
            'id' => 3393,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 13:09:27',
        ),
    26 =>
        array(
            'id' => 3394,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 12:50:46',
        ),
    27 =>
        array(
            'id' => 3395,
            'user_id' => 1,
            'scheduleable_id' => 486,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:50:46',
            'updated_at' => '2020-10-27 12:50:46',
        ),
    28 =>
        array(
            'id' => 3396,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    29 =>
        array(
            'id' => 3397,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    30 =>
        array(
            'id' => 3398,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    31 =>
        array(
            'id' => 3399,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    32 =>
        array(
            'id' => 3400,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    33 =>
        array(
            'id' => 3401,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    34 =>
        array(
            'id' => 3402,
            'user_id' => 1,
            'scheduleable_id' => 487,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:52:25',
            'updated_at' => '2020-10-27 13:09:32',
        ),
    35 =>
        array(
            'id' => 3403,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 12:55:40',
        ),
    36 =>
        array(
            'id' => 3404,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '10:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 13:31:38',
        ),
    37 =>
        array(
            'id' => 3405,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '10:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 13:31:38',
        ),
    38 =>
        array(
            'id' => 3406,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 12:55:40',
        ),
    39 =>
        array(
            'id' => 3407,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 13:31:38',
        ),
    40 =>
        array(
            'id' => 3408,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 12:55:40',
        ),
    41 =>
        array(
            'id' => 3409,
            'user_id' => 1,
            'scheduleable_id' => 488,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:55:40',
            'updated_at' => '2020-10-27 12:55:40',
        ),
    42 =>
        array(
            'id' => 3410,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 12:58:22',
        ),
    43 =>
        array(
            'id' => 3411,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '12:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 13:09:38',
        ),
    44 =>
        array(
            'id' => 3412,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '12:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 13:09:38',
        ),
    45 =>
        array(
            'id' => 3413,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 12:58:22',
        ),
    46 =>
        array(
            'id' => 3414,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '12:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 13:09:38',
        ),
    47 =>
        array(
            'id' => 3415,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 12:58:22',
        ),
    48 =>
        array(
            'id' => 3416,
            'user_id' => 1,
            'scheduleable_id' => 489,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '12:00:00',
            'end_time' => '16:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 12:58:22',
            'updated_at' => '2020-10-27 13:09:38',
        ),
    49 =>
        array(
            'id' => 3417,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    50 =>
        array(
            'id' => 3418,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    51 =>
        array(
            'id' => 3419,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    52 =>
        array(
            'id' => 3420,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    53 =>
        array(
            'id' => 3421,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    54 =>
        array(
            'id' => 3422,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    55 =>
        array(
            'id' => 3423,
            'user_id' => 1,
            'scheduleable_id' => 490,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:00:16',
            'updated_at' => '2020-10-27 13:09:42',
        ),
    56 =>
        array(
            'id' => 3424,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    57 =>
        array(
            'id' => 3425,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    58 =>
        array(
            'id' => 3426,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    59 =>
        array(
            'id' => 3427,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    60 =>
        array(
            'id' => 3428,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    61 =>
        array(
            'id' => 3429,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    62 =>
        array(
            'id' => 3430,
            'user_id' => 1,
            'scheduleable_id' => 491,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '10:00:00',
            'end_time' => '20:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:02:45',
            'updated_at' => '2020-10-27 13:08:35',
        ),
    63 =>
        array(
            'id' => 3431,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    64 =>
        array(
            'id' => 3432,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    65 =>
        array(
            'id' => 3433,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    66 =>
        array(
            'id' => 3434,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    67 =>
        array(
            'id' => 3435,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    68 =>
        array(
            'id' => 3436,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    69 =>
        array(
            'id' => 3437,
            'user_id' => 1,
            'scheduleable_id' => 492,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '15:00:00',
            'end_time' => '21:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-10-27 13:07:59',
            'updated_at' => '2020-10-27 13:07:59',
        ),
    70 =>
        array(
            'id' => 3438,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    71 =>
        array(
            'id' => 3439,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    72 =>
        array(
            'id' => 3440,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    73 =>
        array(
            'id' => 3441,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    74 =>
        array(
            'id' => 3442,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    75 =>
        array(
            'id' => 3443,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    76 =>
        array(
            'id' => 3444,
            'user_id' => NULL,
            'scheduleable_id' => 493,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => NULL,
            'end_time' => NULL,
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:04:17',
            'updated_at' => '2020-11-05 12:04:17',
        ),
    77 =>
        array(
            'id' => 3445,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Mon',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    78 =>
        array(
            'id' => 3446,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Tue',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    79 =>
        array(
            'id' => 3447,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Wed',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    80 =>
        array(
            'id' => 3448,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Thu',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    81 =>
        array(
            'id' => 3449,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Fri',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    82 =>
        array(
            'id' => 3450,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sat',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
    83 =>
        array(
            'id' => 3451,
            'user_id' => 1,
            'scheduleable_id' => 494,
            'scheduleable_type' => 'ResService',
            'day_of_the_week' => 'Sun',
            'start_time' => '08:00:00',
            'end_time' => '17:00:00',
            'properties' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_at' => NULL,
            'created_at' => '2020-11-05 12:08:52',
            'updated_at' => '2020-11-05 12:08:52',
        ),
));


// seed root menus
$topMenu = Corals\Menu\Models\Menu::updateOrCreate(['key' => 'frontend_top'], [
    'parent_id' => 0,
    'url' => null,
    'name' => 'Frontend Top',
    'description' => 'Frontend Top Menu',
    'icon' => null,
    'target' => null,
    'order' => 0
]);

$topMenuId = $topMenu->id;

\Corals\Menu\Models\Menu::query()->where('parent_id', $topMenu->id)->delete();

// seed children menu
Corals\Menu\Models\Menu::updateOrCreate(['key' => 'home'], [
    'parent_id' => $topMenuId,
    'url' => '/',
    'active_menu_url' => '/',
    'name' => 'Home',
    'description' => 'Home Menu Item',
    'icon' => 'fa fa-home',
    'target' => null,
    'order' => 0
]);

Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $topMenuId,
    'key' => null,
    'url' => 'tours',
    'active_menu_url' => 'tours',
    'name' => 'Tours',
    'description' => 'Tours',
    'icon' => null,
    'target' => null,
    'order' => 980
]);


Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $topMenuId,
    'key' => null,
    'url' => 'blog',
    'active_menu_url' => 'blog',
    'name' => 'Blog',
    'description' => 'Blog Menu Item',
    'icon' => null,
    'target' => null,
    'order' => 980
]);

Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $topMenuId,
    'key' => null,
    'url' => 'contact-us',
    'active_menu_url' => 'contact-us',
    'name' => 'Contact Us',
    'description' => 'Contact Us Menu Item',
    'icon' => null,
    'target' => null,
    'order' => 980
]);

$footerMenu = Corals\Menu\Models\Menu::updateOrCreate(['key' => 'frontend_footer'], [
    'parent_id' => 0,
    'url' => null,
    'name' => 'Frontend Footer',
    'description' => 'Frontend Footer Menu',
    'icon' => null,
    'target' => null,
    'order' => 0
]);

$footerMenuId = $footerMenu->id;

// seed children menu
Corals\Menu\Models\Menu::updateOrCreate(['key' => 'footer_home'], [
    'parent_id' => $footerMenuId,
    'url' => '/',
    'active_menu_url' => '/',
    'name' => 'Home',
    'description' => 'Home Menu Item',
    'icon' => 'fa fa-home',
    'target' => null,
    'order' => 0
]);
Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $footerMenuId,
    'key' => null,
    'url' => 'contact-us',
    'active_menu_url' => 'contact-us',
    'name' => 'Contact Us',
    'description' => 'Contact Us Menu Item',
    'icon' => null,
    'target' => null,
    'order' => 980
]);

Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $footerMenuId,
    'key' => null,
    'url' => 'about-us',
    'active_menu_url' => 'about-us',
    'name' => 'About us',
    'description' => 'About us Menu Item',
    'icon' => null,
    'target' => null,
    'order' => 980
]);

Corals\Menu\Models\Menu::updateOrCreate([
    'parent_id' => $footerMenuId,
    'key' => null,
    'url' => 'faqs',
    'active_menu_url' => 'faqs',
    'name' => 'FAQs',
    'description' => 'Faqs Menu Item',
    'icon' => null,
    'target' => null,
    'order' => 980
]);


$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Computers',
    'slug' => 'computers',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Smartphone',
    'slug' => 'smartphone',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Gadgets',
    'slug' => 'gadgets',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Technology',
    'slug' => 'technology',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Engineer',
    'slug' => 'engineer',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Subscriptions',
    'slug' => 'subscriptions',
]);
$categories[] = \Corals\Modules\CMS\Models\Category::updateOrCreate([
    'name' => 'Billing',
    'slug' => 'billing',
]);

$posts[] = \Corals\Modules\CMS\Models\Post::updateOrCreate(['slug' => 'subscription-commerce-trends-for-2018', 'type' => 'post'],
    array(
        'title' => 'Subscription Commerce Trends for 2018',
        'meta_keywords' => NULL,
        'meta_description' => NULL,
        'content' => '<p>Subscription commerce is ever evolving. A few years ago, who would have expected&nbsp;<a href="https://techcrunch.com/2017/10/10/porsche-launches-on-demand-subscription-for-its-sports-cars-and-suvs/" target="_blank">Porsche</a>&nbsp;to launch a subscription service? Or that monthly boxes of beauty samples or shaving supplies and&nbsp;<a href="https://www.pymnts.com/subscription-commerce/2017/how-over-the-top-services-came-out-on-top/" target="_blank">OTT services</a>&nbsp;would propel the subscription model to new heights? And how will these trends shape the subscription space going forward&mdash;and drive growth and innovation?</p>

<p>Regardless of your billing model, there&rsquo;s an opportunity for you to capitalize on many of the current trends in subscription commerce&mdash;trends that will help you to continue to compete and succeed in your industry.</p>

<h3><strong>What are these trends and how can you learn more?</strong></h3>

<p>These trends are outlined in our &ldquo;Top Ten Trends for 2018&rdquo; which we publish every year to help subscription businesses understand the drivers which may impact them in 2018 and beyond.</p>

<p>One trend, for example, is machine learning and data science which the payments industry is increasingly utilizing to deliver more powerful results for their customers.</p>

<p>Another trend which is driving new revenue is the adoption of a hybrid billing model&mdash; subscription businesses seamlessly sell one-time items and &lsquo;traditional&rsquo; businesses add a subscription component as a means to introduce a new revenue stream.</p>

<p>And while subscriber acquisition is not a new trend, there are some sophisticated ways to acquire new customers that subscription businesses are putting to work for increasingly positive effect.</p>

<p>Download this year&rsquo;s edition and see how these trends and insights can help your subscription business succeed in 2018.</p>

<p>&nbsp;</p>',
        'published' => 1,
        'published_at' => '2017-12-04 11:18:23',
        'private' => 0,
        'type' => 'post',
        'template' => NULL,
        'author_id' => 1,
        'deleted_at' => NULL,
        'created_at' => '2017-12-03 23:45:51',
        'updated_at' => '2017-12-04 13:18:23',
    ));
$posts[] = \Corals\Modules\CMS\Models\Post::updateOrCreate(['slug' => 'using-machine-learning-to-optimize-subscription-billing', 'type' => 'post'],
    array(
        'title' => 'Using Machine Learning to Optimize Subscription Billing',
        'meta_keywords' => NULL,
        'meta_description' => NULL,
        'content' => '<p>As a data scientist at Recurly, my job is to use the vast amount of data that we have collected to build products that make subscription businesses more successful. One way to think about data science at Recurly is as an extended R&amp;D department for our customers. We use a variety of tools and techniques, attack problems big and small, but at the end of the day, our goal is to put all of Recurly&rsquo;s expertise to work in service of your business.</p>

<p>Managing a successful subscription business requires a wide range of decisions. What is the optimum structure for subscription plans and pricing? What are the most effective subscriber acquisition methods? What are the most efficient collection methods for delinquent subscribers? What strategies will reduce churn and increase revenue?</p>

<p>At Recurly, we&#39;re focused on building the most flexible subscription management platform, a platform that provides a competitive advantage for your business. We reduce the complexity of subscription billing so you can focus on winning new subscribers and delighting current subscribers.</p>

<p>Recently, we turned to data science to tackle a big problem for subscription businesses: involuntary churn.</p>

<h3><strong>The Problem: The Retry Schedule</strong></h3>

<p>One of the most important factors in subscription commerce is subscriber retention. Every billing event needs to occur flawlessly to avoid adversely impacting the subscriber relationship or worse yet, to lose that subscriber to churn.</p>

<p>Every time a subscription comes up for renewal, Recurly creates an invoice and initiates a transaction using the customer&rsquo;s stored billing information, typically a credit card. Sometimes, this transaction is declined by the payment processor or the customer&rsquo;s bank. When this happens, Recurly sends reminder emails to the customer, checks with the Account Updater service to see if the customer&#39;s card has been updated, and also attempts to collect payment at various intervals over a period of time defined by the subscription business. The timing of these collection attempts is called the &ldquo;retry schedule.&rdquo;</p>

<p>Our ability to correct and successfully retry these cards prevents lost revenue, positively impacts your bottom line, and increases your customer retention rate.</p>

<p>Other subscription providers typically offer a static, one-size-fits-all retry schedule, or leave the schedule up to the subscription business, without providing any guidance. In contrast, Recurly can use machine learning to craft a retry schedule that is tailored to each individual invoice based on our historical data with hundreds of millions of transactions. Our approach gives each invoice the best chance of success, without any manual work by our customers.</p>

<p>A key component of Recurly&rsquo;s values is to test, learn and iterate. How did we call on those values to build this critical component of the Recurly platform?</p>

<h3><strong>Applying Machine Learning</strong></h3>

<p>We decided to use statistical models that leverage Recurly&rsquo;s data on transactions (hundreds of millions of transactions built up over years from a wide variety of different businesses) to predict which transactions are likely to succeed. Then, we used these models to craft the ideal retry schedule for each individual invoice. The process of building the models is known as machine learning.</p>

<p>The term &quot;machine learning&quot; encompasses many different processes and methods, but at its heart is an effort to go past explicitly programmed logic and allow a computer to arrive at the best logic on its own.</p>

<p>While humans are optimized for learning certain tasks&mdash;like how children can speak a new language after simply listening for a few months&mdash;computers can also be trained to learn patterns. Aggregating hundreds of millions of transactions to look for the patterns that lead to transaction success is a classic machine learning problem.</p>

<p>A typical machine learning project involves gathering data, training a statistical model on that data, and then evaluating the performance of the model when presented with new data. A model is only as good as the data it&rsquo;s trained on, and here we had a huge advantage.</p>',
        'published' => 1,
        'published_at' => '2017-12-04 11:21:25',
        'private' => 0,
        'type' => 'post',
        'template' => NULL,
        'author_id' => 1,
        'deleted_at' => NULL,
        'created_at' => '2017-12-04 13:21:25',
        'updated_at' => '2017-12-04 13:21:25',
    ));
$posts[] = \Corals\Modules\CMS\Models\Post::updateOrCreate(['slug' => 'why-you-need-a-blog-subscription-landing-page', 'type' => 'post'],
    array(
        'title' => 'Why You Need A Blog Subscription Landing Page',
        'meta_keywords' => NULL,
        'meta_description' => NULL,
        'content' => '<p>Whether subscribing via email or RSS, your site visitor is individually volunteering to add your content to their day; a day that is already crowded with content from emails, texts, voicemails, site content, and even snail mail. &nbsp;</p>

<p>As a business, each time you receive a new blog subscriber, you have received validation or &quot;a vote&quot; that your audience has identified YOUR content as adding value to their day. With each new blog subscriber, your content is essentially being awarded as being highly relevant to conversations your readers are having on a regular basis.&nbsp;</p>

<p>To best promote the content your blog subscribers can expect to receive on an ongoing basis,&nbsp;<strong>consider adding a blog subscription landing page.&nbsp;</strong>This is a quick win that will help your company enhance the blogging subscription experience and help you measure and manage the success of this offer with analytical insight.</p>

<p>Holistically, your goal with this landing page is to provide visitors with a sneak preview of the experience they will receive by becoming a blog subscriber.<strong>&nbsp;Your blog subscription landing page should include:</strong></p>

<ul>
<li><strong>A high-level overview of topics, categories your blog will discuss.&nbsp;&nbsp;</strong>For example, HubSpot&#39;s blog covers &quot;all of the inbound marketing - SEO, Blogging, Social Media, Landing Pages, Lead Generation, and Analytics.&quot;</li>
<li><strong>Insight into &quot;who&quot; your blog will benefit.&nbsp;&nbsp;</strong>Examples may include HR Directors, Financial Business professionals, Animal Enthusiasts, etc.&nbsp; If your blog appeals to multiple personas, feel free to spell this out.&nbsp; This will help assure your visitor that they are joining a group of like-minded individuals who share their interests and goals.&nbsp;&nbsp;</li>
<li><strong>How your blog will help to drive the relevant conversation.&nbsp;</strong>Examples may include &quot;updates on industry events&quot;, &quot;expert editorials&quot;, &quot;insider tips&quot;, etc.&nbsp;&nbsp;</li>
</ul>

<p><strong>To create your blog subscription landing page, consider the following steps:</strong></p>

<p>1) Create your landing page following&nbsp;landing page best practices.&nbsp; Consider the &quot;subscribing to your blog&quot; offer as similar to other offers you promote using Landing Pages.&nbsp;</p>

<p>2) Create a Call To Action button that will link to this landing page.&nbsp; Use this button as a call to action within your blog articles or on other website pages to link to a blog subscription landing page&nbsp;Make sure your CTA button is supercharged!</p>

<p>3)&nbsp;Create a Thank You Page&nbsp;to complete the sign-up experience with gratitude and a follow-up call to action.&nbsp;</p>

<p>4) Measure the success of your blog subscription landing page.&nbsp;Consider the 3 Secrets to Optimizing Landing Page Copy.&nbsp;</p>

<p>For more information on Blogging Success Strategies,&nbsp;check out more Content Camp Resources and recorded webinars.&nbsp;</p>',
        'published' => 1,
        'published_at' => '2017-12-04 11:33:19',
        'private' => 0,
        'type' => 'post',
        'template' => NULL,
        'author_id' => 1,
        'deleted_at' => NULL,
        'created_at' => '2017-12-04 13:31:46',
        'updated_at' => '2017-12-04 13:33:19',
    ));

$posts_media = [
    0 => array(
        'id' => 4,
        'model_type' => 'Corals\\Modules\\CMS\\Models\\Post',
        'collection_name' => 'featured-image',
        'name' => 'subscription_trends',
        'file_name' => 'subscription_trends.png',
        'mime_type' => 'image/png',
        'disk' => 'media',
        'size' => 20486,
        'manipulations' => '[]',
        'custom_properties' => '{"root":"demo"}',
        'order_column' => 6,
        'created_at' => '2017-12-03 23:45:51',
        'updated_at' => '2017-12-03 23:45:51',
    ),
    1 => array(
        'id' => 8,
        'model_type' => 'Corals\\Modules\\CMS\\Models\\Post',
        'collection_name' => 'featured-image',
        'name' => 'machine_learning',
        'file_name' => 'machine_learning.png',
        'mime_type' => 'image/png',
        'disk' => 'media',
        'size' => 32994,
        'manipulations' => '[]',
        'custom_properties' => '{"root":"demo"}',
        'order_column' => 11,
        'created_at' => '2017-12-04 13:21:25',
        'updated_at' => '2017-12-04 13:21:25',
    ),
    2 => array(
        'id' => 9,
        'model_type' => 'Corals\\Modules\\CMS\\Models\\Post',
        'collection_name' => 'featured-image',
        'name' => 'Successful-Blog_Fotolia_102410353_Subscription_Monthly_M',
        'file_name' => 'Successful-Blog_Fotolia_102410353_Subscription_Monthly_M.jpg',
        'mime_type' => 'image/jpeg',
        'disk' => 'media',
        'size' => 182317,
        'manipulations' => '[]',
        'custom_properties' => '{"root":"demo"}',
        'order_column' => 12,
        'created_at' => '2017-12-04 13:33:19',
        'updated_at' => '2017-12-04 13:33:19',
    ),
];
foreach ($posts as $index => $post) {
    $randIndex = rand(0, 6);
    if (isset($categories[$randIndex])) {
        $category = $categories[$randIndex];
        try {
            \DB::table('category_post')->insert(array(
                array(
                    'post_id' => $post->id,
                    'category_id' => $category->id,
                )
            ));
        } catch (\Exception $exception) {
        }
    }

    if (isset($posts_media[$index])) {
        try {
            $posts_media[$index]['model_id'] = $post->id;
            \DB::table('media')->insert($posts_media[$index]);
        } catch (\Exception $exception) {
        }
    }
}

$memberRole = \Corals\User\Models\Role::where('name', \Settings::get('default_user_role', 'member'))->first();

$memberRole->syncPermissions(
    'Reservation::reservation.update',
    'Utility::rating.update',
    'Utility::rating.create'
);


\Corals\Modules\Entity\Models\Entry::query()
    ->each(function (\Corals\Modules\Entity\Models\Entry $entry) {
        $entry->indexRecord();
    });