<template>
    <div class="col">
        <div class="card">
            <div class="card-image">
                <slot name="card-header"></slot>
            </div>
            <div class="card-body">
                <slot name="card-body"></slot>
            </div>
            <div class="card-footer">
                <slot name="card-footer"
              
                ></slot>
            </div>
        </div>
    </div>
</template>