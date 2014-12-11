<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="bower_components/DataTables-1.10.4/media/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/DataTables-1.10.4/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Customer App</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-slide-dropdown">
          <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            <li><a href="customers">Customers</a></li>
            <li><a href="/manage">Manage</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="/jun">Log out</a></li>
              </ul>
            </li>
          </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
          
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">CUSTOMERS LIST</h3>
                  
                </div>
                
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover " id="dev-table">
                      <thead>
                        <tr>
                          <th>Frist Name</th>
                          <th>Last Name</th>
                          <th>Address</th>
                          <th>Fathers Name</th>
                          <th>Mothers Name</th>
                          <th>Birth Date</th>
                          <th>Gender</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($user as $key) { ?>
                        <tr >
                          <td ><?php echo $key->c_fname ?></td>
                          <td><?php echo $key->c_lname ?></td>
                          <td><?php echo $key->c_address ?></td>
                          <td><?php echo $key->c_fathersname ?></td>
                          <td><?php echo $key->c_mothersname ?></td>
                          <td><?php echo $key->c_birthdate ?></td>
                          <td><?php echo $key->c_gender ?></td>
                          <td class="text-center"><a class='btn btn-info btn-xs' href=""><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="bower_components/jquery/dist/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
          <script src="bower_components/DataTables-1.10.4/media/js/jquery-1.11.1.min.js"></script>
          <script src="bower_components/DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
          <script src="bower_components/DataTables-1.10.4/media/js/dataTables.bootstrap.js"></script>
          <script>
          $(document).ready(function(){
          $(".dropdown").hover(
          function() {
          $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
          $(this).toggleClass('open');
          },
          function() {
          $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
          $(this).toggleClass('open');
          }
          );
          });
          </script>
          <script>
          $(document).ready(function() {
          $('#dev-table').dataTable();
          } );
          //     (function(){
          //     'use strict';
          //   var $ = jQuery;
          //   $.fn.extend({
          //     filterTable: function(){
          //       return this.each(function(){
          //         $(this).on('keyup', function(e){
          //           $('.filterTable_no_results').remove();
          //           var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
          //           if(search == '') {
          //             $rows.show();
          //           } else {
          //             $rows.each(function(){
          //               var $this = $(this);
          //               $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
          //             })
          //             if($target.find('tbody tr:visible').size() === 0) {
          //               var col_count = $target.find('tr').first().find('td').size();
          //               var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
          //               $target.find('tbody').append(no_results);
          //             }
          //           }
          //         });
          //       });
          //     }
          //   });
          //   $('[data-action="filter"]').filterTable();
          // })(jQuery);
          // $(function(){
          //     // attach table filter plugin to inputs
          //   $('[data-action="filter"]').filterTable();
          
          //   $('.container').on('click', '.panel-heading span.filter', function(e){
          //     var $this = $(this),
          //         $panel = $this.parents('.panel');
          
          //     $panel.find('.panel-body').slideToggle();
          //     if($this.css('display') != 'none') {
          //       $panel.find('.panel-body input').focus();
          //     }
          //   });
          //   $('[data-toggle="tooltip"]').tooltip();
          // })
          </script>
        </body>
      </html>