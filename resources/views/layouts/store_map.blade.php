<div class="modal fade" id="storeMapModal" tabindex="-1" role="dialog" aria-labelledby="storeMapModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storeMapModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <style>
                    /* Always set the map height explicitly to define the size of the div
                 * element that contains the map. */
                    #map {
                        height: 100%;
                    }

                    /* Optional: Makes the sample page fill the window. */
                    html,
                    body {
                        height: 100%;
                        margin: 0;
                        padding: 0;
                    }

                    #floating-panel {
                        position: absolute;
                        top: 10px;
                        left: 25%;
                        z-index: 5;
                        background-color: #fff;
                        padding: 5px;
                        border: 1px solid #999;
                        text-align: center;
                        font-family: 'Roboto', 'sans-serif';
                        line-height: 30px;
                        padding-left: 10px;
                    }

                </style>
                <div id="map"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
