$(document).ready(function() {

   tata = ($.getJSON("http://localhost/laravel/portable/public/event/create=?",{format:"json"}, function(data) { document.write(data); })) ;

console.log(tata);
});
