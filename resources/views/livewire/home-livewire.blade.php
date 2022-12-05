<div>
    <livewire:component.toaster-component/>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
    <!-- DataTales Example -->
    @can('user')
        <livewire:component.agency-request-component/>
    @elsecan('agency')
        <livewire:component.complaint-table-component/>
    @elsecan('admin')
        <livewire:component.complaint-table-component/>
    @endif
</div>
