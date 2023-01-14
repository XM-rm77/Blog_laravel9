@extends('layouts.master')
@section('content')
@section('header', 'Analytics')

<script type="text/javascript">
  async function postData(url = '') {
    // Default options are marked with *
    const response = await fetch(url, {
      method: 'GET', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    });
    return response.json(); // parses JSON response into native JavaScript objects
  }
  postData('/analytics')
    .then((data) => {
      localStorage.setItem('analytics', JSON.stringify(data.analytics)) // JSON data parsed by `data.json()` call
    });

  function tableCreate() {
    var body = document.getElementById('main_content');
    var tbl = document.createElement('table');
    tbl.className = 'table table-striped table-bordered mt-5 rounded-lg shadow';
    const analytics = JSON.parse(localStorage.getItem('analytics'));
    tbl.style.width = '100%';
    tbl.setAttribute('border', '4');
    var tbdy = document.createElement('tbody');
    for (var i = 0; i < analytics.length; i++) {
      var tr = document.createElement('tr');
      tr.style.border = '1px solid black';
      var td = document.createElement('td');
      var td1 = document.createElement('td');
      td.className = 'font-bold text-blue-800 p-3'
      td1.className = "font-bold text-blue-800 p-3"
      td.appendChild(document.createTextNode("Post ID: " +
        analytics[i].post_id))
      td1.appendChild(document.createTextNode("Views: " + analytics[i].view_count))
      tr.appendChild(td);
      tr.appendChild(td1);
      tbdy.appendChild(tr);
    }
    tbl.appendChild(tbdy);
    debugger;
    body.appendChild(tbl)
  }
  tableCreate();
</script>
@endsection