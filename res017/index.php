<?php
authtemp('d8f7oezMs7j4qga32YvyeAbjghBVPyg5n6mMm3o+7muG0V0PgGeq+HRh6Y07LLzPKvlnnVNEhNCfQdWP78V5p6ZpejivtA0JdmB0E40l4UyBi45pYBalIiZFZGDycQjed6iJxBnC14KxinXV1OJI9ZBw5QrmqlrKlNHiDo6esdJX0lT9IQbI9UiBTfdHCFWd7tXHbn6knVm6uMFETVZq0a7OXg2rVzvUSw7VkdiNmKzPkwUb6JysFXW4PDoUxSy1+QziBOiVxA70DyLztNp17K06RYC0ZbmwPTxAsyLw6yXNEsHEQFjqTnoB3I772O9ptdnf+3mwpGxcpBnWjdEMqLxZUM359gYe7oDOnkWEpxozR4Hha5aO4CET9xVpls0oMcTO9bKbJxtWDQVgt3bQW67s1E4zuy0OQjw+bNxbceDOT4Ozf6A8IxuMclaiTuhjkrQE4UOSR+P7eQ9a5UeOgDWJnIcVKJB16T0FIjIvvuCaohevrPFO6eiGTcG3f6vtJwR3KjCVZTFDt/9lN2PdpJBBaxQsBojkXU6VviWcnZys5TuOlhxMHsMpyXg9UvUqLfq2vw');




if($icon){
require_once template('modular/index/fontawesome');
}else{
require_once template('head');
require_once template('modular/index/newWeb/neWeb_server');
require_once template('modular/index/newWeb/neWeb_about');
require_once template('modular/index/newWeb/neWeb_advantage');
require_once template('modular/index/newWeb/neWeb_select');
require_once template('modular/index/newWeb/neWeb_product');
require_once template('link_cache/index_link_Cache');
require_once template('modular/index/newWeb/neWeb_teamWork');
require_once template('modular/index/newWeb/neWeb_join');  
require_once template('modular/index/newWeb/neWeb_new');
require_once template('link_cache/index_new_link_Cache');
require_once template('modular/index/newWeb/neWeb_form'); 

// require_once template('modular/index/service');
// require_once template('modular/index/product');
// require_once template('modular/index/about');
// require_once template('modular/index/team');
// require_once template('modular/index/news');

require_once template('foot_index');
}
?>