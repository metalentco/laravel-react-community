<div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
    
    * {
      margin: 0;
      padding: 0;
      outline: none;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    
    html,
    body {
      display: grid;
      height: 100%;
      place-items: center;
      text-align: center;
      background: #dde1e7;
    }
    
    .container {
      background: #dde1e7;
      padding: 25px;
      border-radius: 3px;
      box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, 0.288);
      margin: 20px 0;
    }
    
    .container .pagination {
      display: flex;
      list-style: none;
    }
    
    .container .pagination li {
      flex: 1;
      margin: 0 5px;
      background: #dde1e7;
      box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, 0.288);
    }
    
    .pagination li a {
      font-size: 18px;
      text-decoration: none;
      color: #4d3252;
      height: 45px;
      width: 55px;
      display: block;
      line-height: 45px;
    }
    
    .pagination li.active {
      box-shadow: inset -3px -3px 7px #ffffff73,
        inset 3px 3px 5px rgba(94, 104, 121, 0.288);
    }
    
    .pagination li.active a {
      font-size: 17px;
      color: #6f6cde;
    }
    
    .pagination li:first-child a {
      width: 120px;
    }
    
    .pagination li:last-child a {
      width: 100px;
    }
    
    .pagination li:first-child {
      margin: 0 15px 0 0;
    }
    
    .pagination li:last-child {
      margin: 0 0 0 15px;
    }
    
    </style>

    <div class="container">
        <ul class="pagination">
          <li><a href="{{route('onlinetutorial.panel1')}}">Previous</a></li>
          <li><a href="{{route('panel1pagina1')}}">1</a></li>
          <li><a href="{{route('panel1pagina1')}}">Next</a></li>
        </ul>
      </div>
</div>
