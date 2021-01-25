var remoteFileObjToLocal = require('@uppy/utils/lib/remoteFileObjToLocal');

module.exports = /*#__PURE__*/function () {
  function SharedHandler(plugin) {
    this.plugin = plugin;
    this.filterItems = this.filterItems.bind(this);
    this.toggleCheckbox = this.toggleCheckbox.bind(this);
    this.isChecked = this.isChecked.bind(this);
    this.loaderWrapper = this.loaderWrapper.bind(this);
  }

  var _proto = SharedHandler.prototype;

  _proto.filterItems = function filterItems(items) {
    var state = this.plugin.getPluginState();

    if (!state.filterInput || state.filterInput === '') {
      return items;
    }

    return items.filter(function (folder) {
      return folder.name.toLowerCase().indexOf(state.filterInput.toLowerCase()) !== -1;
    });
  }
  /**
   * Toggles file/folder checkbox to on/off state while updating files list.
   *
   * Note that some extra complexity comes from supporting shift+click to
   * toggle multiple checkboxes at once, which is done by getting all files
   * in between last checked file and current one.
   */
  ;

  _proto.toggleCheckbox = function toggleCheckbox(e, file) {
    var _this = this;

    e.stopPropagation();
    e.preventDefault();
    e.currentTarget.focus();

    var _this$plugin$getPlugi = this.plugin.getPluginState(),
        folders = _this$plugin$getPlugi.folders,
        files = _this$plugin$getPlugi.files;

    var items = this.filterItems(folders.concat(files)); // Shift-clicking selects a single consecutive list of items
    // starting at the previous click and deselects everything else.

    if (this.lastCheckbox && e.shiftKey) {
      var _currentSelection;

      var prevIndex = items.indexOf(this.lastCheckbox);
      var currentIndex = items.indexOf(file);

      if (prevIndex < currentIndex) {
        _currentSelection = items.slice(prevIndex, currentIndex + 1);
      } else {
        _currentSelection = items.slice(currentIndex, prevIndex + 1);
      } // Check restrictions on each file in currentSelection,
      // reduce it to only contain files that pass restrictions


      _currentSelection = _currentSelection.reduce(function (reducedCurrentSelection, item) {
        var uppy = _this.plugin.uppy;
        var validatedRestrictions = uppy.validateRestrictions(remoteFileObjToLocal(item), [].concat(uppy.getFiles(), reducedCurrentSelection));

        if (!validatedRestrictions.result) {
          uppy.info({
            message: validatedRestrictions.reason
          }, 'error', uppy.opts.infoTimeout);
          return reducedCurrentSelection;
        }

        return [].concat(reducedCurrentSelection, [item]);
      });
      this.plugin.setPluginState({
        currentSelection: _currentSelection
      });
      return;
    }

    this.lastCheckbox = file;

    var _this$plugin$getPlugi2 = this.plugin.getPluginState(),
        currentSelection = _this$plugin$getPlugi2.currentSelection;

    if (this.isChecked(file)) {
      this.plugin.setPluginState({
        currentSelection: currentSelection.filter(function (item) {
          return item.id !== file.id;
        })
      });
    } else {
      this.plugin.setPluginState({
        currentSelection: currentSelection.concat([file])
      });
    }
  };

  _proto.isChecked = function isChecked(file) {
    var _this$plugin$getPlugi3 = this.plugin.getPluginState(),
        currentSelection = _this$plugin$getPlugi3.currentSelection; // comparing id instead of the file object, because the reference to the object
    // changes when we switch folders, and the file list is updated


    return currentSelection.some(function (item) {
      return item.id === file.id;
    });
  };

  _proto.loaderWrapper = function loaderWrapper(promise, then, catch_) {
    var _this2 = this;

    promise.then(function (result) {
      _this2.plugin.setPluginState({
        loading: false
      });

      then(result);
    }).catch(function (err) {
      _this2.plugin.setPluginState({
        loading: false
      });

      catch_(err);
    });
    this.plugin.setPluginState({
      loading: true
    });
  };

  return SharedHandler;
}();