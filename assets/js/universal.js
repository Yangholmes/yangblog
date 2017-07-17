/* jshint esversion: 6 */
/**
 * Yangholmes 2017-07-17
 * This is the universal JavaScript in the project
 * Thanks for jQuery
 */
// if $ not register
if(!window.$) window.$ = jQuery;

// start with $(document)
$(() => {
  console.log('jQuery loaded!');


  $('.field-search input[type="search"]').on('keydown', (e)=>{
    let keyword = e.currentTarget.value;
    if(e.keyCode !== 13) return keyword;
    searchPosts(keyword);
  });
  $('.field-search .search-icon').on('click', (e)=>{
    let input = $('.field-search input[type="search"]'),
        keyword = input.val();
    searchPosts(keyword);
  });

});

/**
 * search posts
 * @param  {[string]} keyword [keyword]
 * @return {[type]}   null    [description]
 */
var searchPosts = (keyword) => {
  $.ajax('../', {
    method: 'GET',
    data: 's='+keyword,
    success: (responed)=>{

    }
  });
};
