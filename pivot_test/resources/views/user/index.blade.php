
<html lang="en">
    <head>
        <title>Laravel pivot - test</title> 
    
        <!-- CSS And JavaScript -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js">
 		</script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script>
     	 $(document).ready(function(){
              $("#user").click(function(){
              	$('#devices').css('display','none');
              	$('#users').css('display','block');
              	$( "#user" ).removeClass( "btn-default" );
              	$( "#user" ).addClass( "btn-primary" );
              	$( "#device" ).removeClass( "btn-primary" );
              	$( "#device" ).addClass( "btn-default" );


    		});
              $("#device").click(function(){
              	$('#users').css('display','none');
              	$('#devices').css('display','block');
              	$( "#device" ).removeClass( "btn-default" );
              	$( "#device" ).addClass( "btn-primary" );
              	$( "#user" ).removeClass( "btn-primary" );
              	$( "#user" ).addClass( "btn-default" );
    		});
    		});
			</script>
       
    </head>

    <body>
    
        <div class="container" style="margin-top: 25px;
"> 
          <!--  <nav class="navbar navbar-default" style="display: inline-flex;">
           
         
               
            </nav>-->
             <p>
			  <button id="user" type="button" class="btn btn-primary btn-sm">Users</button>
			  <button id="device" type="button" class="btn btn-default btn-sm">Devices</button>
			</p>
        </div>

    <!-- Create Task Form... -->

    <!-- Current Tasks -->
     
        <div class="panel panel-default" id="users">
        @if (count($users) > 0)
            <div class="panel-heading">
               
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    	<th>#Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>#Device</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($users as $user)
                       
                            <tr>
                                <!-- Task Name -->
                                 <td class="table-text">
                                    <div>{{ $user->toArray()["id"] }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $user->toArray()["name"] }}</div>
                                </td>

                                <td class="table-text">
                                     <div>{{ $user->toArray()["email"] }} </div>
                                </td>

                                  <td class="table-text">
                                  @foreach ($user->toArray()["devices"] as $ud)
                                     <div>{{ $ud["device_number"] }}</div>
                                       @endforeach
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
             {{ $users->links() }}
                 @endif
        </div>
             


    
        <div class="panel panel-default" id="devices" style="display:none">
        @if (count($devices) > 0)
            <div class="panel-heading">
               
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>#Device</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($devices as $device)
                       
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $device->device_number }}</div>
                                </td>

                                <td class="table-text">
                                     <div>{{ $device->date_create }} </div>
                                </td>

                                  <td class="table-text">
                                     <div>{{ $device->date_updated }}</div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            {{ $devices->links() }}
             @endif
        </div>
    </body>
</html>
