<!-- reference web page header -->
<?php require("view/header.php");?>
<body>
  <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Passport Challenge</a>

<!--************************** top nav bar **************************-->
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="index.php"><i class="material-icons">dns</i></a></li>
          <li><a href="index.php"><i class="material-icons">share</i></a></li>


        </ul>
<!--************************** mobile nav bar **************************-->

        <ul id="nav-mobile" class="sidenav">
          <li style="text-align: center;"><a href="index.php"><i class="material-icons">home</i></a></li>

          <li style="text-align: center;"><a href="index.php"><i class="material-icons">dns</i></a></li>

          <li style="text-align: center;"><a href="index.php"><i class="material-icons">share</i></a></li>

        </ul>
        <a href="index.php" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
<!--************************** new section **************************-->
<!--************************** new section **************************-->

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center orange-text">Passport Tree Challenge</h2>
      <div class="icon-block">
      <h3 class="center light-blue-text"><i class="material-icons">book</i></h3>
      </div>
      <div class="row center">
        <h4 class="header col s12 light center-align">Responsive Tree using PHP, AJAX, JS, MySQL</h4>
      </div>

      <div class="row center">
        <a href="index.php#passport" id="download-button" class="btn-large waves-effect waves-light orange pulse">Check it Out!</a>
      </div>
      <br><br>
    </div>
  </div>
<br>
<!--************************** new section **************************-->
<div class="divider"></div><br>
<!--************************** new section **************************-->
  <div class="container">
    <div class="section">
     <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <!-- create node section-->
          <div class="icon-block z-depth-2" style="padding:10px; position-relative;">
            <h2 class="center light-blue-text"><i class="material-icons">build</i></h2>
            <h5 class="center">Add Tree Nodes</h5>
            <p class="light">You can right click directly on a parent node to add a child node</p>
            <div class="row center">
              <a id="download-button" class="btn-large blue accent-3 waves-effect waves-light pulse" onclick="demo_create();">Create Node
                <i class="material-icons"> create </i>
              </a>
            </div>
          </div>
        </div>
        <!-- end create node section-->


        <!-- delete node section-->
        <div class="col s12 m4">
          <div class="icon-block z-depth-2" style="padding:10px; position:relative;">
            <h2 class="center light-blue-text"><i class="material-icons">cancel_presentation</i></h2>
            <h5 class="center">Delete Tree Nodes</h5>

            <p class="light">By utilizing ajax we are able to right click on nodes and make them disappear</p>
            <div class="row center">
              <a id="download-button" class="btn-large blue accent-3 waves-effect waves-light pulse" onclick="demo_delete();">Delete Node
                <i class="material-icons"> delete </i>
              </a>
            </div>
          </div>
        </div>
        <!-- end delete node section-->


        <!-- rename node section-->
        <div class="col s12 m4">
          <div class="icon-block z-depth-2" style="padding:10px; position:relative;">
            <h2 class="center light-blue-text"><i class="material-icons">sync</i></h2>
            <h5 class="center">Rename Tree Nodes</h5>
            <p class="light">Another Option available to us is right clicking on a node and renaming its title</p>
            <div class="row center">
              <a id="download-button" class="btn-large blue accent-3 waves-effect waves-light pulse" onclick="demo_rename();">Rename Node
                <i class="material-icons"> redo </i>
              </a>
            </div>
          </div>
        </div>
      <!-- end  rename node section-->
      </div>
      </div>
      </div>

      <?php
      $max_error = $min_error = 1;
      $max       = $min       = 1;

      $numbers = range(1, 20);
      shuffle($numbers);

      function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array($numbers, 0, $quantity);
      }

      ?>

      <div class="container center-align">

      <h2>Random Node Generator</h2>
      <p>
      <!--span class="error">* required field</span-->
      </p>

      <div class="row">

      <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <div class="row">
      <div class="input-field col s6">
      <input id="min" placeholder="Placeholder" type="text" class="validate" name="min" value="<?php echo $min;?>">
      <label for="min"> Lower Limit:</label>
      </div>


      <div class="input-field col s6">
      <input id="max" placeholder="Placeholder" type="text" class="validate" name="max" value="<?php echo $max;?>">
      <label for="max"> Upper Limit:</label>
      </div>
      </div>



      <button class="btn blue accent-3 waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>

            <?php
      echo "<h2>Random Limits:</h2>";
      print_r(UniqueRandomNumbersWithinRange(0, 25, 16));
      ?>
      </form>
        </div>
        </div>







  <!--
  ********************************************************************************************************************************************
  *  toolkit helper
  ********************************************************************************************************************************************
  -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <!-- Modal Structure 1-->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Right Click</h4>
            <p><i class="material-icons">highlight</i>Tip: You can also right click on a factory node, to create, delete, or rename child nodes  </p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Got it!</a>
          </div>
        </div>


        <!-- Modal Structure 2 -->
          <div id="modal2" class="modal">
            <div class="modal-content">
              <h4>Button Issues?</h4>
              <p><i class="material-icons">highlight</i> Tip: Remember, to create a new node using the button click command, you must highlight the factory node you wish to add children node to.
              Then you can proceed with adding children to that factory node. </p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Easy!</a>
            </div>
          </div>

          <!-- Modal Structure 3 -->
            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>Dont Sweat it</h4>
                <p><i class="material-icons">rowing</i> Tip: You're doing a great job!   </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Awesome!</a>
              </div>
            </div>

      <li><a data-target="modal1" class="btn-floating blue modal-trigger"><i class="material-icons">mouse</i></a></li>
      <li><a data-target="modal2" class="btn-floating yellow darken-1 modal-trigger"><i class="material-icons">format_quote</i></a></li>
      <li><a data-target="modal3" class="btn-floating green modal-trigger"><i class="material-icons">home</i></a></li>

    </ul>
  </div>
<!--
********************************************************************************************************************************************
*  End Random Form
********************************************************************************************************************************************
-->
<div class="section" id="passport">
       <div class="row">
    <div class="col s12">
      <div class="card light-blue lighten-3" style="max-width:75%; margin:0 auto;">
        <div class="card-content white-text">
          <span class="card-title center-align"><h3>Responsive Tree</h3></span>
          <div class="container center-align"><div id="tree-container" style="max-width: 50%; margin:0 auto;"></div></div>
  </div>
   </div>
   <div id="log"></div>

</div>
</div>
</div>
<br>
<br>

<!--
********************************************************************************************************************************************
*  break
********************************************************************************************************************************************
-->


<script type="text/javascript">
/**
********************************************************************************************************************************************
*  Begin Declaring Tree Function
********************************************************************************************************************************************
**/
$(function () {
      $(window).resize(function () {
        var h = Math.max($(window).height() - 0, 420);
        $('#container, #data, #tree, #data .content').height(h).filter('.default').css('lineHeight', h + 'px');
      }).resize();
    //fill data to tree  with AJAX call
    $('#tree-container').jstree({
        'core' : {
        'data' : {
              'url' : 'response.php?operation=get_node',
              'data' : function (node) {
                return { 'id' : node.id };
              },
              "dataType" : "json"
            },
        'check_callback' : true,
        'themes' : {
            'responsive' : false,
            'variant' : 'small',
            'stripes' : true
         }
      },
     'sort' : function(a, b) {
            return this.get_type(a) === this.get_type(b) ? (this.get_text(a) > this.get_text(b) ? 1 : -1) : (this.get_type(a) >= this.get_type(b) ? 1 : -1);
          },
            // declare "context menus" to be appended to right-click menu
            'contextmenu' : {
            'items' : function(node) {
              var tmp = $.jstree.defaults.contextmenu.items();
              delete tmp.create.action;
              tmp.create.label = "New";
/**
**********************************************************************
*  Add Factory
**********************************************************************
**/
             // 'create folder' context menu, which allows right click option
              tmp.create.submenu = {
                "create_folder" : {
                  "separator_after" : true,
                  "label"       : "Add Factory",
                  "action"      : function (data) {
                    var inst = $.jstree.reference(data.reference),
                      obj = inst.get_node(data.reference);
                    inst.create_node(obj, { type : "default" }, "last", function (new_node) {
                      setTimeout(function () { inst.edit(new_node); },0);
                    });
                  }
                },
/**
**********************************************************************
*  Add Child Node
**********************************************************************
**/
                // 'create file' context menu, which allows right click option
                "create_file" : {
                  "label"       : "Generate Random Numbers",
                  "action"      : function (data) {
                    // create variable for referencing data inside js tree
                    var inst = $.jstree.reference(data.reference),
                    // create an object using that var => 'inst'
                    obj = inst.get_node(data.reference);

                    inst.create_node(obj, { type : "file" }, "last", function (new_node) {
                      setTimeout(function () { inst.edit(new_node); },0);
                    });
                  }
                }
              };
              if(this.get_type(node) === "file") {
                delete tmp.create;
              }
              return tmp;
            }
          },
          'types' : {
            'default' : { 'icon' : 'folder' },
            'file' : { 'valid_children' : [], 'icon' : 'file' }
          },
          'unique' : {
            'duplicate' : function (name, counter) {
              return name + ' ' + counter;
            }
          },
      'plugins' : ['state','dnd','sort','types','contextmenu','unique', 'conditionalselect']
        }).on('delete_node.jstree', function (e, data) {
          $.get('?operation=delete_node', { 'id' : data.node.id })
            .fail(function () {
              data.instance.refresh();
            });
        }) // We have just deleted a node
        .on('create_node.jstree', function (e, data) {
          $.get('?operation=create_node', { 'type' : data.node.type, 'id' : data.node.parent, 'text' : data.node.text })
            .done(function (d) {
              data.instance.set_id(data.node, d.id);
            })
            .fail(function () {
              data.instance.refresh();
            });
        }) // We have just created a node
        .on('rename_node.jstree', function (e, data) {
          $.get('?operation=rename_node', { 'id' : data.node.id, 'text' : data.text })
            .done(function (d) {
              data.instance.set_id(data.node, d.id);
            })
            .fail(function () {
              data.instance.refresh();
            });
        }) // We have just renamed a node
        .on('move_node.jstree', function (e, data) {
          $.get('?operation=move_node', { 'id' : data.node.id, 'parent' : data.parent })
            .done(function (d) {
              //data.instance.load_node(data.parent);
              data.instance.refresh();
            })
            .fail(function () {
              data.instance.refresh();
            });
        }) // We have just moved a node
        .on('copy_node.jstree', function (e, data) {
          $.get('?operation=copy_node', { 'id' : data.original.id, 'parent' : data.parent })
            .done(function (d) {
              //data.instance.load_node(data.parent);
              data.instance.refresh();
            })
            .fail(function () {
              data.instance.refresh();
            });
        }) // We have just copied a node
        .on('changed.jstree', function (e, data) {
          if(data && data.selected && data.selected.length) {
            $.get('?operation=get_content&id=' + data.selected.join(':'), function (d) {
              if(d && typeof d.type !== 'undefined') {
                $('#data .content').hide();
                switch(d.type) {
                  case 'text':
                  case 'txt':
                  case 'md':
                  case 'htaccess':
                  case 'log':
                  case 'sql':
                  case 'php':
                  case 'js':
                  case 'json':
                  case 'css':
                  case 'html':
                    $('#data .code').show();
                    $('#code').val(d.content);
                    break;
                  case 'png':
                  case 'jpg':
                  case 'jpeg':
                  case 'bmp':
                  case 'gif':
                    $('#data .image img').one('load', function () { $(this).css({'marginTop':'-' + $(this).height()/2 + 'px','marginLeft':'-' + $(this).width()/2 + 'px'}); }).attr('src',d.content);
                    $('#data .image').show();
                    break;
                  default:
                    $('#data .default').html(d.content).show();
                    break;
                }
              }
            });
          }
          else {
            $('#data .content').hide();
            $('#data .default').html('Select a file from the tree.').show();
          }
        });
    });
    $('#tree-container').on("changed.jstree", function (e, data) {
      console.log("The selected node is:" + " " + data.instance.get_selected(true)[0].text);
    });

    console = {
        log : function (m) {
            $("#log").append("<br/>" + m.toString());
        }
    };


/**     Button onClick functions
*********************************************************************************************************************
*  => create 'context menu' for random number generator first, then reference here under 'demo_rand' function
*
*       sel => selected node
*       sel = ref.get_selected(); => reference selected node to generate files as children
*
*       sel = sel[0]; => put that selected value at the beginning of array index
*       sel = ref.create_node(sel, { "type": "file" }); => create node as a file type
*
*
*
*
*
* rand(min,max);
*
*
*
*
**/

// Add Factory Node OnClick
function demo_create() {
      var ref = $('#tree-container').jstree(true),
      sel = ref.get_selected();
      if (!sel.length) { return false; }
      sel = sel[0];
      sel = ref.create_node(sel, { "type": "file" });
      if (sel) {
        ref.edit(sel);
      }
};



// rand function for onClick event
function demo_rand() {

  // referenced value is the tree container => true
      var ref = $('#tree-container').jstree(true),
      // please select that value
      sel = ref.get_selected();
      // else please return false
      if (!sel.length) { return false; }
      // otherwise, please initialize the node array
      sel = sel[0];
     // for that selected value, please create a child node
      sel = ref.create_node(sel, { "type": "file" });


      if (sel) {
        ref.edit(sel);
      }
};



// rename function for onClick event
function demo_rename() {
      var ref = $('#tree-container').jstree(true),
      sel = ref.get_selected();
      if (!sel.length) { return false; }
      sel = sel[0];
      ref.edit(sel);
};

// delete function for onClick event
function demo_delete() {
    var ref = $('#tree-container').jstree(true),
    sel = ref.get_selected();
    if (!sel.length) { return false; }
    ref.delete_node(sel);
};

  // float button jQuery

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

// modal
  $(document).ready(function(){
      $('.modal').modal();
    });
    </script>
  </body>


<!-- reference web page footer -->
<?php require("view/footer.php");?>
