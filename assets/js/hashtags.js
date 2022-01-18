//
// <script type="text/javascript">
//   var tag1lst = <?php echo json_encode($tag1) ?>;
//   $('.tag1').first().click(function() {
//     var temp = tag1lst.pop();
//     $('.tag1').first().html(temp);
//     tag1lst.unshift(temp);
//     console.log(temp);
//   });
// </script>


// 这个function把所有的hashtag hide起来 每组第一个显示 然后每次click到下一个

function change(tag){
  $(tag).hide();
  $(tag).first().show();
  $(tag).click(function() {
    if ($(this).next(tag).length != 0){
      $(this).hide();
      $(this).next().show();
    }
    else{
      $(this).hide();
      $(tag).first().show();
    }
  });
};

change('.tag');
change('.tag2');
change('.tag3');
change('.tag4');
change('.tag5');
change('.tag6');
change('.tag7');


// $('.tag').hide();
// $('.tag').first().show();
// $('.tag').click(function() {
//   if ($(this).next().length !== 0){
//     $(this).hide();
//     $(this).next().show();
//   }
//   else{
//     $(this).hide();
//     $('.tag').first().show();
//   }
// });
//
//
// $('.tag2').hide();
// $('.tag2').first().show();
// $('.tag2').click(function() {
//   if ($(this).next().length !== 0){
//     $(this).hide();
//     $(this).next().show();
//   }
//   else{
//     $(this).hide();
//     $('.tag2').first().show();
//   }
// });
//
// $('.tag3').hide();
// $('.tag3').first().show();
// $('.tag3').click(function() {
//   if ($(this).next().length !== 0){
//     $(this).hide();
//     $(this).next().show();
//   }
//   else{
//     $(this).hide();
//     $('.tag3').first().show();
//   }
// });
//
// $('.tag4').hide();
// $('.tag4').first().show();
// $('.tag4').click(function() {
//   if ($(this).next().length !== 0){
//     $(this).hide();
//     $(this).next().show();
//   }
//   else{
//     $(this).hide();
//     $('.tag4').first().show();
//   }
// });
//
//
// $('.tag5').hide();
// $('.tag5').first().show();
// $('.tag5').click(function() {
//   if ($(this).next().length !== 0){
//     $(this).hide();
//     $(this).next().show();
//   }
//   else{
//     $(this).hide();
//     $('.tag5').first().show();
//   }
// });
