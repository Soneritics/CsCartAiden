{if $soneriticsAidenAdvisorId}
<div class="row-fluid">
    <div class="span8">
        {if $category_data.description || $runtime.customization_mode.live_editor}
            <div class="ty-wysiwyg-content ty-mb-s" {live_edit name="category:description:{$category_data.category_id}"}>{$category_data.description nofilter}</div>
        {/if}
    </div>

    <div class="span8">
        <div class="soneritics-aiden-holder">
            <p><strong>Welke {$soneriticsAidenType} kiest u?</strong></p>
            <p>Een beetje hulp bij het maken van de beste keuze.</p>
            <a data-advisor-id="{$soneriticsAidenAdvisorId}">{__("addons.soneritics_aiden.start")}</a>
        </div>
    </div>
</div>
{/if}