<h3>Consulta de acceso por Puertas</h3>
<form id="doors-form" class="ui form">
    <div class="fields">
        <div class="four wide field">
            <select id="doors-search" class="ui fluid search dropdown">
                <option>Seleccione una puerta</option>
                <?php
                foreach ($doors as $door):
                    ?>
                    <option value="<?= $door['tp_term_id'];?>" data-name="<?= $door['tp_term_name'];?>" data-guid="<?= $door['tp_guid'];?>"><?= $door['tp_term_name'];?></option>
                    <?php
                endforeach;
                ?>
            </select>
        </div>
        <div class="three wide field">
            <div class="ui calendar start-date">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="start_date" name="start_date" type="text" placeholder="Fecha Inicio">
                </div>
            </div>
        </div>
        <div class="two wide field">
            <div class="ui calendar start-time">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="start_time" name="start_time" type="text" placeholder="Hora Inicio">
                </div>
            </div>
        </div>
        <div class="three wide field">
            <div class="ui calendar end-date">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="end_date" name="end_date" type="text" placeholder="Fecha Fin">
                </div>
            </div>
        </div>
        <div class="two wide field">
            <div class="ui calendar end-time">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="end_time" name="end_time" type="text" placeholder="Hora Fin">
                </div>
            </div>
        </div>
        <div class="two wide field">
            <div id="search-doors" class="ui vertical blue animated button" tabindex="0">
                <div class="hidden content">Buscar</div>
                <div class="visible content">
                    <i class="search icon"></i>
                </div>
            </div>
        </div>
    </div>
</form>
