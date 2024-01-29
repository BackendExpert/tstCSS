<?php include("layouts/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Example</title>
</head>
<body>

<div class="site-container">
<button class="jkbtn jkbtn-blue modal-open" data-modal="modal1">Model
            1</button>
        <button class="jkbtn jkbtn-green modal-open" data-modal="modal2">Model
            2</button>
        <button class="jkbtn jkbtn-yellow modal-open" data-modal="modal3">Model
            3</button>

        <div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header">
                    Modal 1
                    <button class="close-btn">&times;</button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?
                </div>
                <div class="modal-footer">
                    <button class="jkbtn jkbtn-blue">Links</button>
                </div>
            </div>
        </div>

        <!-- model 2 -->

        <div class="modal" id="modal2">
            <div class="modal-content">
                <div class="modal-header">
                    Modal 1
                    <button class="close-btn">&times;</button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro accusamus repudiandae nulla possimus quasi officia eos
                    consectetur. Quo corrupti eos, maxime vel illo sapiente. Eum
                    dolorum possimus aspernatur necessitatibus eveniet.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro accusamus repudiandae nulla possimus quasi officia eos
                    consectetur. Quo corrupti eos, maxime vel illo sapiente. Eum
                    dolorum possimus aspernatur necessitatibus eveniet.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro accusamus repudiandae nulla possimus quasi officia eos
                    consectetur. Quo corrupti eos, maxime vel illo sapiente. Eum
                    dolorum possimus aspernatur necessitatibus eveniet.
                    <br>
                </div>
                <div class="modal-footer">
                    <button class="jkbtn jkbtn-blue">Links</button>
                </div>
            </div>
        </div>

        <!-- model 3 -->

        <div class="modal" id="modal3">
            <div class="modal-content">
                <div class="modal-header">
                    Modal 1
                    <button class="close-btn">&times;</button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tenetur rem est sapiente voluptas repellat nemo temporibus
                    dolores, quo sed illo dicta quasi et asperiores excepturi
                    assumenda culpa molestiae pariatur voluptates?
                </div>
                <div class="modal-footer">
                    <button class="jkbtn jkbtn-blue">Links</button>
                </div>
            </div>
        </div>
</div>

<!-- <script src="app.js"></script> -->
</body>
</html>
