<div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
    <!-- DataTales Example -->
    @can('user')

    @elsecan('agency')

    @elsecan('admin')
        <livewire:component.complaint-table-component/>
    @endif
</div>
