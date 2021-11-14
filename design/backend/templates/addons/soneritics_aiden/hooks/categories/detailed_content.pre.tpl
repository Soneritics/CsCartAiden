{if $runtime.mode == 'update'}
    {include file="common/subheader.tpl" title="Aiden Advisor ID" target="#soneritics_aidenadvisor"}
    <div id="soneritics_aidenadvisor" class="in collapse">
        <label class="control-label">Advisor ID:</label>
        <div class="controls">
            <input type="text" id="elm_soneritics_aidenadvisorid" name="soneritics_aidenadvisorid" value="{$soneritics_aidenadvisorid}" class="input-large">
        </div>

        <label class="control-label">Type:</label>
        <div class="controls">
            <input type="text" id="elm_soneritics_aidenadvisortype" name="soneritics_aidenadvisortype" value="{$soneritics_aidenadvisortype}" class="input-large">
        </div>
    </div>
{/if}