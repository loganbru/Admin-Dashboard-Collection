@section('content-sidebar')
<div class="sidebar-content todo-sidebar d-flex">
  <span class="sidebar-close-icon">
    <i class="feather icon-x"></i>
  </span>
 <div class="todo-app-menu">
      <div class="form-group text-center add-task">
          <button type="button" class="btn btn-primary btn-block my-1" data-toggle="modal" data-target="#addTaskModal">Add Task</button>
      </div>
      <div class="sidebar-menu-list">
          <div class="list-group list-group-filters font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0 pt-0 active">
                  <i class="font-medium-5 feather icon-mail mr-50"></i> All
              </a>
          </div>
          <hr>
          <h5 class="mt-2 mb-1 pt-25">Filters</h5>
          <div class="list-group list-group-filters font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i> Starred</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i> Important</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-check mr-50"></i> Completed</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i> Trashed</a>
          </div>
          <hr>
          <h5 class="mt-2 mb-1 pt-25">Labels</h5>
          <div class="list-group list-group-labels font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Frontend</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Backend</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> Doc</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> Bug</a>
          </div>
      </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
  <div class="modal-content">
    <section class="todo-form">
      <form id="form-add-todo" class="todo-input">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="todo-item-action ml-auto">
              <a class='todo-item-info'><i class="feather icon-info"></i></a>
              <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
              <div class="dropdown todo-item-label">
                <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel"
                  data-toggle="dropdown">
                </i>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoLabel">
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="primary" data-value="Frontend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Frontend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="warning" data-value="Backend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Backend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="success" data-value="Doc">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Doc</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="danger" data-value="Bug">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Bug</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <fieldset class="form-group">
            <input type="text" class="new-todo-item-title form-control" placeholder="Title">
          </fieldset>
          <fieldset class="form-group">
              <textarea class="new-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
          </fieldset>
        </div>
        <div class="modal-footer">
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" class="btn btn-primary add-todo-item" data-dismiss="modal"><i class="feather icon-check d-block d-lg-none"></i>
              <span class="d-none d-lg-block">Add Task</span></button>
          </fieldset>
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
              <span class="d-none d-lg-block">Cancel</span></button>
          </fieldset>
        </div>
      </form>
    </section>
  </div>
</div>
</div>
@endsection
