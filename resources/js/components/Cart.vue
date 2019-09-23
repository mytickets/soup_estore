<template>
<div>
    <table class="table-cart" style="">
        <tbody>
            <tr>
                <td class="title">
                    <span class="name"><a href="#productModal" data-toggle="modal">Pizza Chicked BBQ</a></span>
                    <span class="caption text-muted">26”, deep-pan, thin-crust</span>
                </td>
                <td class="price">$9.82</td>
                <td class="actions">
                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                </td>
            </tr>
            <tr>
                <td class="title">
                    <span class="name"><a href="#productModal" data-toggle="modal">Beef Burger</a></span>
                    <span class="caption text-muted">Large (500g)</span>
                </td>
                <td class="price">$9.82</td>
                <td class="actions">
                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                </td>
            </tr>
            <tr>
                <td class="title">
                    <span class="name"><a href="#productModal" data-toggle="modal">Extra Burger</a></span>
                    <span class="caption text-muted">Small (200g)</span>
                </td>
                <td class="price text-success">$0.00</td>
                <td class="actions">
                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                </td>
            </tr>
            <tr>
                <td class="title">
                    <span class="name">Weekend 20% OFF</span>
                </td>
                <td class="price text-success">-$8.22</td>
                <td class="actions"></td>
            </tr>
        </tbody>
    </table>    
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
