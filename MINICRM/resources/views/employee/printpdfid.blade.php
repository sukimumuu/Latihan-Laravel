   <style>
      .table-wrapper{
   
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}
h4{
  text-align: center;
}
   </style>
   <div class="content">
    <div class="row">
        <div class="col-md-12">
    <div class="card bg-dark">
      <div class="card-header">
        <h4 class="card-title"> Employee Data</h4>
      </div>
      @php
          $no=1;
      @endphp
      <div class="card-body">
        <div class="table-wrapper">
          <table class="fl-table">
            <thead class=" text-primary">
              <tr>
                <th>No</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Ability</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $daploid->firstname }}</td>
                <td>{{ $daploid->lastname }}</td>
                <td>{{ ($daploid->company !== null) ? $daploid->companies->name : '-' }}</td>
                <td>{{ $daploid->email }}</td>
                <td>{{ $daploid->phone }}</td>
                <td>{{ $daploid->gender }}</td>
                <td>{{ $daploid->hobbies }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    </div>