<?php
require_once('header.php');

//make sure only future rides are displayed
$todate=date('Y-m-d');

$result=mysql_query("SELECT * FROM ride where status!='booked' && dateadded>=$todate ORDER BY dateadded DESC");

?>
<div class="container-fluid">
<div class="col-md-8">
    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
<div id="wrapper">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >

          


        <h4>Available Rides</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Origin</th>
                    <th class="header" id="usr">Destination</th> 
                    <th class="header" id="usr">Capacity</th> 
                    <th class="header" id="usr">Posted By</th>
                    <th class="header" id="usr">Status</th>
                    <th class="header" id="usr">Date</th>
                    <th class="header" id="usr">Action</th> 
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr >
                    <td><?php echo $row["origin"] ?></td> 
                    <td><?php echo $row["destination"]?></td>
                    <td><?php echo $row["capacity"] ?></td>
                    <td><?php echo $row["postedby"] ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <td><?php echo $row["dateadded"] ?></td>
                    <td><a class="btn btn-xs" href="book.php?id=<?php echo $row['id'] ?>">Book Ride</a></td>
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
        
        
        
</div>        
</div>
        </div>
    <script type="text/javascript" src="js/jquery.js"> </script>        
    <script src="js/plugins/dataTables/jquery.dataTables.js"> </script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"> </script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"> </script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"> </script>


             <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
    <style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>