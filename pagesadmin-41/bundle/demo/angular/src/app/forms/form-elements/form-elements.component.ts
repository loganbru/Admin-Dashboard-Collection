import { Component, OnInit } from '@angular/core';
import createNumberMask from 'text-mask-addons/dist/createNumberMask'
import * as moment from 'moment';
@Component({
  selector: 'app-form-elements',
  templateUrl: './form-elements.component.html',
  styleUrls: ['./form-elements.component.scss']
})
export class FormElementsComponent implements OnInit {

  options = [
    { value: 'jack', label: 'Jacks' },
    { value: 'lucy', label: 'Lucy' },
    { value: 'disabled', label: 'Disabled', disabled: true }
  ];

  csoptions = [
    { value: 'Web-safe', label: 'Web-safe' },
    { value: 'Helvetica', label: 'Helvetica' },
    { value: 'SegeoUI', label: 'SegeoUI' },
  ];

  tags = ["Smith","Jane"];
  selectedOption;
  selectedOptionCS;

  searchOptions = [
    { value: 'jack', label: 'Jack' },
    { value: 'lucy', label: 'Lucy' },
    { value: 'tom', label: 'Tom' }
  ];
  selectedMultipleOption =[ 'Tom', 'Jack' ];

  selectedState;
  selectedStateTwo;
  selectedStateThree;

  states: string[] = [
    'Alabama',
    'Alaska',
    'Arizona',
    'Arkansas',
    'California',
    'Colorado',
    'Connecticut',
    'Delaware',
    'Florida',
    'Georgia',
    'Hawaii',
    'Idaho',
    'Illinois',
    'Indiana',
    'Iowa',
    'Kansas',
    'Kentucky',
    'Louisiana',
    'Maine',
    'Maryland',
    'Massachusetts',
    'Michigan',
    'Minnesota',
    'Mississippi',
    'Missouri',
    'Montana',
    'Nebraska',
    'Nevada',
    'New Hampshire',
    'New Jersey',
    'New Mexico',
    'New York',
    'North Dakota',
    'North Carolina',
    'Ohio',
    'Oklahoma',
    'Oregon',
    'Pennsylvania',
    'Rhode Island',
    'South Carolina',
    'South Dakota',
    'Tennessee',
    'Texas',
    'Utah',
    'Vermont',
    'Virginia',
    'Washington',
    'West Virginia',
    'Wisconsin',
    'Wyoming'
  ];
  _date = null;
  _date_time = null;

  //Input Examples Masks
  mask = {
    date : [/[1-9]/, /\d/,'/', /\d/, /\d/,'/', /\d/, /\d/, /\d/, /\d/],
    telephone:['(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/],
    custom:[/[1-9]/, /\d/,'-', /\d/, /\d/, /\d/, /\d/, /\d/, /\d/, /\d/],
    ssn:[/[1-9]/, /\d/, /\d/,'-', /\d/, /\d/,'-', /\d/, /\d/, /\d/, /\d/],
  }
  numberMask = createNumberMask({
    prefix: '$ ',
    suffix: ''
  });
  wierdMask = createNumberMask({
    prefix: '',
    suffix: '',
    thousandsSeparatorSymbol:'.',
    allowDecimal:true,
    decimalSymbol:','
  });
  dollarPrefix = createNumberMask({
    prefix: '$ ',
    suffix: '',
    allowDecimal:true
  });
  range = createNumberMask({
    prefix: '',
    suffix: '',
    integerLimit:4
  });
  ngOnInit() {

  }

  fileList = [{
    uid: -1,
    name: 'xxx.png',
    status: 'done',
    url: 'http://pages.revox.io/dashboard/3.0.0/html/condensed/assets/img/profiles/avatar_small2x.jpg',
  }];
  previewImage = '';
  previewVisible = false;

  fileList1=[];
  fileList2=[];
  handlePreview;

  //Fileupload HandleChange
  handleChange(event){
  }

  //Tag OnClose CallBack
  onClose(event){
    console.log(event);
  }

  //Date Range Setup
  _startDate = null;
  _endDate = null;
  newArray = (len) => {
    const result = [];
    for (let i = 0; i < len; i++) {
      result.push(i);
    }
    return result;
  };
  _startValueChange = () => {
    if (this._startDate > this._endDate) {
      this._endDate = null;
    }
  };
  _endValueChange = () => {
    if (this._startDate > this._endDate) {
      this._startDate = null;
    }
  };
  _disabledStartDate = (startValue) => {
    if (!startValue || !this._endDate) {
      return false;
    }
    return startValue.getTime() >= this._endDate.getTime();
  };
  _disabledEndDate = (endValue) => {
    if (!endValue || !this._startDate) {
      return false;
    }
    return endValue.getTime() <= this._startDate.getTime();
  };
  get _isSameDay() {
    return this._startDate && this._endDate && moment(this._startDate).isSame(this._endDate, 'day')
  }
  get _endTime() {
    return {
      nzHideDisabledOptions: true,
      nzDisabledHours: () => {
        return this._isSameDay ? this.newArray(this._startDate.getHours()) : [];
      },
      nzDisabledMinutes: (h) => {
        if (this._isSameDay && h === this._startDate.getHours()) {
          return this.newArray(this._startDate.getMinutes());
        }
        return [];
      },
      nzDisabledSeconds: (h, m) => {
        if (this._isSameDay && h === this._startDate.getHours() && m === this._startDate.getMinutes()) {
          return this.newArray(this._startDate.getSeconds());
        }
        return [];
      }
    }
  }
  //END Date Range

  //Advance Date Option - Disable Dates
  //All Future Dates
  _advance_date = null;
  _advance_disabledDate(current: Date): boolean {
    //Future
    return current && current.getTime() < Date.now();
  }
}
