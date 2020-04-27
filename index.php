<p>asdfadfasdas</p>
<script>
    var data = "[\n  {\n    \"FileId\": 1,\n    \"PlaylistNumber\": 1,\n    \"MovieTitle\": \"Richmedia Stinger 1.mp4\",\n    \"VideoLengthSec\": 17,\n    \"StartDate\": \"2017-10-04 01:00:00\",\n    \"EndDate\": \"2020-01-31 23:59:00\",\n    \"LoopShows\": 0,\n    \"ClientCode\": \"ADSRICHMEDIA000000001\"\n  },\n  {\n    \"FileId\": 2,\n    \"PlaylistNumber\": 51,\n    \"MovieTitle\": \"Richmedia Stinger 1.mp4\",\n    \"VideoLengthSec\": 17,\n    \"StartDate\": \"2017-10-04 01:00:00\",\n    \"EndDate\": \"2020-01-30 23:59:00\",\n    \"LoopShows\": 0,\n    \"ClientCode\": \"ADSRICHMEDIA000000001\"\n  }\n  \n]";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://localhost/update_table.php?");
xhr.setRequestHeader("Content-Type", "application/json");
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.setRequestHeader("Content-Type", "text/plain");

xhr.send(data);
</script>
