<!-- reference web page header -->
<?php require("view/header.php");?>
    <div class="section">
     <!--   Icon Section   -->
     <div class="col s12">
      <div class="row">
        <div class="col s3 m3">
          <!-- create node section-->
          <div class="icon-block z-depth-5" style="padding:10px; position:relative;">
            <h2 class="center light-blue-text">
              <i class="material-icons medium animated infinite swing delay-200s">build</i>
            </h2>
            <h5 class="center">Add Tree Nodes</h5>
            <p class="light">You can right click directly on a parent node to add a child node</p>
            <div class="row center">
              <a id="download-button" class="btn blue accent-3 waves-effect waves-light" onclick="demo_create();">Create Node
                <i class="material-icons"> create </i>
              </a>
            </div>
          </div>
        </div>
        <!-- end create node section-->

        <!-- delete node section-->
        <div class="col s3 m3">
          <div class="icon-block z-depth-5" style="padding:10px; position:relative;">
            <h2 class="center light-blue-text"><i class="material-icons medium animated infinite hinge delay-200s">cancel_presentation</i></h2>
            <h5 class="center">Delete Tree Nodes</h5>
            <p class="light">By utilizing ajax we are able to right click on nodes and make them disappear</p>
            <div class="row center">
              <a id="download-button" class="btn blue accent-3 waves-effect waves-light" onclick="demo_delete();">Delete Node
                <i class="material-icons"> delete </i>
              </a>
            </div>
          </div>
        </div>
        <!-- end delete node section-->


        <!-- rename node section-->
        <div class="col s3 m3">
          <div class="icon-block z-depth-5" style="padding:10px; position:relative;">
            <h2 class="center light-blue-text"><i class="material-icons medium animated infinite rotateIn delay-150s">sync</i></h2>
            <h5 class="center">Rename Tree Nodes</h5>
            <p class="light">Another Option available to us is right clicking on a node and renaming its title</p>
            <div class="row center">
              <a id="download-button" class="btn blue accent-3 waves-effect waves-light" onclick="demo_rename();">Rename Node
                <i class="material-icons"> redo </i>
              </a>
            </div>
          </div>
        </div>

        <?php

        if (isset($_POST['submit'])) {
            $max       = '15';
            $min       = '1';

            $lower_bound = &$min;
            $upper_bound = &$max;

            $upper_bound = trim($_POST['max']);
            $lower_bound = trim($_POST['min']);

            $errorArray = array();

            if ($upper_bound == '' || $lower_bound == '') {
                array_push($errorArray, 'Please fill all fields.');
            }
            if (filter_var($lower_bound, FILTER_VALIDATE_INT) == false) {
                array_push($errorArray, 'Please enter a number for lower.');
            }
            if (filter_var($upper_bound, FILTER_VALIDATE_INT) == false) {
                array_push($errorArray, 'Please enter a number for upper.');
            }
        }
        ?>

      <!-- random node section-->
      <div class="col s3 m3">
        <div class="icon-block z-depth-5" style="padding:10px; position:relative;">
          <h2 class="center light-blue-text"><i class="material-icons medium animated infinite rotateIn delay-150s">sync</i></h2>
          <h5 class="center">Random Generator</h5>
            <!-- need action for form-->
          <form id ="generator" method="post"  onsubmit="return demo_create()">

            <div class="input-field col s6">
            <input type="text" class="validate" name="min">
            <label for="min"> Lower Limit:</label>
            </div>

            <div class="input-field col s6">
            <input type="text" class="validate" name="max">
            <label for="max"> Upper Limit:</label>
            </div>

            <div class="row center">
              <button class="btn blue accent-3 waves-effect waves-light" id="rand"  type="submit" name="submit" value="Submit">Submit
                <i class="material-icons"> send </i>
              </button>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section">

  <div class="row">
    <div class="container" style="margin:0 auto;">
      <form class="col s12" id="s">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input type="search" id="q" />
            <div class="container center-align">
             <button class="btn blue accent-3 waves-effect waves-light center-align" type="submit">Search Node
               <i class="material-icons right">search</i>
             </button>
            </div>
         </form>
      </div>
    </div>
  </div>
</div>
</div>



      <div class="section" id="passport">
        <div class="col s12">

       <div class="row">

       <div class="col s6 m6 l6">
       <div class="card" style="background:rgba(21,101,192,.7);">
        <div class="card-content white-text">
         <span class="card-title center-align"><h3>Responsive Tree</h3></span>
         <ul class="collection">
          <div id="tree-container"></div>
         </ul>
         </div>
        </div>
      </div>


      <div class="col s6 m6 l6">
      <div class="card" style="background:rgba(21,101,192,.7);">
       <div class="card-content white-text">
        <span class="card-title center-align"><h3>Live Node Fee</h3></span>
        <ul class="collection">
          <div id="log"><i class="material-icons circle">grade</i></div>
        </ul>
        </div>
       </div>
     </div>
   </div>
 </div>
</div>






  <div class="fixed-action-btn">
    <a class="btn-floating btn-large coloroquial red pulse">
      <i class="large material-icons" style="display:block;text-align: center;position:relative; margin-bottom:25px;">mode_edit</i>
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
                <p><i class="material-icons">rowing</i> Tip: Try Dragging and dropping nodes!   </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Got it!</a>
              </div>
            </div>

      <li>
        <a data-target="modal1" class="btn-floating blue modal-trigger"><i class="material-icons">mouse</i></a>
      </li>

      <li>
        <a data-target="modal2" class="btn-floating yellow darken-1 modal-trigger"><i class="material-icons">format_quote</i></a>
      </li>

      <li>
        <a data-target="modal3" class="btn-floating green modal-trigger"><i class="material-icons">home</i></a>
      </li>

    </ul>
  </div>

  <script type="text/javascript">

$(function () {
      $(window).resize(function () {
        var h = Math.max($(window).height() - 0, 420);
        $('#container, #data, #tree, #data .content').height(h).filter('.default').css('lineHeight', h + 'px');
      }).resize();
    $('#tree-container').jstree({
        "core" : {
          "multiple": false,
			"data" : {
							'url' : 'node.php?operation=get_node',
							'data' : function (node) {
								return { 'id' : node.id };
							},
							"dataType" : "json"
						}
          ,'check_callback' : true,
						'themes' : {
              "variant": "large",
							"responsive" : "false",
              "stripes" : "true",
						}
			},
      "checkbox" : {
    "keep_selected_style" : false
  },
			'plugins' : ["themes","search","checkbox","state","contextmenu","wholerow", "dnd"]
		}).on('create_node.jstree', function (e, data) {
					$.get('node.php?operation=create_node', { 'id' : data.node.parent, 'position' : data.position, 'text' : data.node.text })
						.done(function (d) {
							data.instance.set_id(data.node, d.id);
						})
						.fail(function () {
							data.instance.refresh();
						});
				}).on('rename_node.jstree', function (e, data) {
					$.get('node.php?operation=rename_node', { 'id' : data.node.id, 'text' : data.text })
						.fail(function () {
							data.instance.refresh();
						});
				}).on('delete_node.jstree', function (e, data) {
					$.get('node.php?operation=delete_node', { 'id' : data.node.id })
						.fail(function () {
							data.instance.refresh();
						});
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

$("#s").submit(function(e) {
e.preventDefault();
$("#tree-container").jstree(true).search($("#q").val());
});

$("#generator").submit(function(e) {
e.preventDefault();
$("#tree-container").jstree(true).create_node($("#rand").val());
});

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

  $(document).ready(function(){
    $('select').formSelect();
  });

    </script>


<!-- reference web page footer -->
<?php require("view/footer.php");?>
