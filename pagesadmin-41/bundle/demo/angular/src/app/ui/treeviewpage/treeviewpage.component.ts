import { Component, OnInit } from '@angular/core';
import { ITreeOptions , TreeModel, TreeNode } from 'angular-tree-component';
@Component({
  selector: 'app-treeviewpage',
  templateUrl: './treeviewpage.component.html',
  styleUrls: ['./treeviewpage.component.scss']
})
export class TreeviewpageComponent implements OnInit {

  constructor() { 
    this.asyncNodes = [
      {
        name: 'root1',
        children: [
          { name: 'child1' }
        ]
      },
      {
        name: 'root2',
        hasChildren: true
      },
      {
        name: 'root3'
      }
    ];

  }

  ngOnInit() {
  }

  simpleNodes = [
    {
      id: 1,
      name: 'item1 with key and tooltip'
    },
    {
      id: 2,
      name: 'item2'
    },
    {
      id: 3,
      name: 'Folder with some children',
      children: [
        { id: 4, name: 'Sub-item 3.1',
          children:[
            {id: 5, name: 'Sub-item 3.1.1'},
            {id: 6, name: 'Sub-item 3.1.2'}
          ]
        },
        { id: 7, name: 'Sub-item 3.2',
          children:[
            {id: 8, name: 'Sub-item 3.2.1'},
            {id: 9, name: 'Sub-item 3.2.2'}
          ]
        }
      ]
    },
    {
      id: 10,
      name: 'Document with some children (expanded on init)',
      isExpanded:true,
      children: [
        { id: 11, name: 'Sub-item 4.1  (active and focus on init)',
        isFocused:true
        }
      ]
    },
  ];

  nodes = [
    {
      id: 1,
      name: 'item1 with key and tooltip'
    },
    {
      id: 2,
      name: 'item2'
    },
    {
      id: 3,
      name: 'Folder with some children',
      children: [
        { id: 4, name: 'Sub-item 3.1',
          children:[
            {id: 5, name: 'Sub-item 3.1.1'},
            {id: 6, name: 'Sub-item 3.1.2'}
          ]
        },
        { id: 7, name: 'Sub-item 3.2',
          children:[
            {id: 8, name: 'Sub-item 3.2.1'},
            {id: 9, name: 'Sub-item 3.2.2'}
          ]
        }
      ]
    },
    {
      id: 10,
      name: 'Document with some children (expanded on init)',
      isExpanded:true,
      children: [
        { id: 11, name: 'Sub-item 4.1  (active and focus on init)',
          isExpanded:true,
          children:[
            {id: 12, name: 'Sub-item 4.1.1'},
            {id: 13, name: 'Sub-item 4.1.2'}
          ]
        },
        { id: 14, name: 'Sub-item 4.2',isExpanded:true,
        
          children:[
            {id: 15, name: 'Sub-item 4.2.1'},
            {id: 16, name: 'Sub-item 4.2.2'}
          ]
        }
      ]
    },
  ];

  searchnodes = [
    {
      name: 'North America',
      children: [
        { name: 'United States', children: [
          {name: 'New York'},
          {name: 'California'},
          {name: 'Florida'}
        ] },
        { name: 'Canada' }
      ]
    },
    {
      name: 'South America',
      children: [
        { name: 'Argentina', children: [] },
        { name: 'Brazil' }
      ]
    },
    {
      name: 'Europe',
      children: [
        { name: 'England' },
        { name: 'Germany' },
        { name: 'France' },
        { name: 'Italy' },
        { name: 'Spain' }
      ]
    }
  ];

  options = {
    animateExpand:true,
  };
  
  optionsdng = {
    animateExpand:true,
    allowDrag: true,
    allowDrop: true
  };

  options_checkbox: ITreeOptions = {
    useCheckbox: true
  };

  filterFn(value: string, treeModel: TreeModel) {
    treeModel.filterNodes((node: TreeNode) => this.fuzzysearch(value, node.data.name));
  }

  fuzzysearch (needle: string, haystack: string) {
    const haystackLC = haystack.toLowerCase();
    const needleLC = needle.toLowerCase();
  
    const hlen = haystack.length;
    const nlen = needleLC.length;
  
    if (nlen > hlen) {
      return false;
    }
    if (nlen === hlen) {
      return needleLC === haystackLC;
    }
    outer: for (let i = 0, j = 0; i < nlen; i++) {
      const nch = needleLC.charCodeAt(i);
  
      while (j < hlen) {
        if (haystackLC.charCodeAt(j++) === nch) {
          continue outer;
        }
      }
      return false;
    }
    return true;
  }

  asyncOptions: ITreeOptions = {
    getChildren: this.getChildren.bind(this)
  };
  asyncNodes: any[] = [];
  asyncChildren = [
    {
      name: 'child1',
      hasChildren: true
    }, {
      name: 'child2'
    }
  ];
  getChildren(node: any) {
    const newNodes = this.asyncChildren.map((c) => Object.assign({}, c));

    return new Promise((resolve, reject) => {
      setTimeout(() => resolve(newNodes), 1000);
    });
  }

}
