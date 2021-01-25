
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
    </div>
  </div>
  <!-- Zero configuration table -->
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Zero configuration</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                      </tr>
                                      <tr>
                                          <td>Ashton Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009/01/12</td>
                                          <td>$86,000</td>
                                      </tr>
                                      <tr>
                                          <td>Cedric Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012/03/29</td>
                                          <td>$433,060</td>
                                      </tr>
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$162,700</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                      </tr>
                                      <tr>
                                          <td>Rhona Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010/10/14</td>
                                          <td>$327,900</td>
                                      </tr>
                                      <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009/09/15</td>
                                          <td>$205,500</td>
                                      </tr>
                                      <tr>
                                          <td>Sonya Frost</td>
                                          <td>Software Engineer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008/12/13</td>
                                          <td>$103,600</td>
                                      </tr>
                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                      </tr>
                                      <tr>
                                          <td>Charde Marshall</td>
                                          <td>Regional Director</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008/10/16</td>
                                          <td>$470,600</td>
                                      </tr>
                                      <tr>
                                          <td>Haley Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012/12/18</td>
                                          <td>$313,500</td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010/03/17</td>
                                          <td>$385,750</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012/11/27</td>
                                          <td>$198,500</td>
                                      </tr>
                                      <tr>
                                          <td>Paul Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>New York</td>
                                          <td>64</td>
                                          <td>2010/06/09</td>
                                          <td>$725,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                      </tr>
                                      <tr>
                                          <td>Bradley Greer</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012/10/13</td>
                                          <td>$132,000</td>
                                      </tr>
                                      <tr>
                                          <td>Dai Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012/09/26</td>
                                          <td>$217,500</td>
                                      </tr>
                                      <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>New York</td>
                                          <td>30</td>
                                          <td>2011/09/03</td>
                                          <td>$345,000</td>
                                      </tr>
                                      <tr>
                                          <td>Yuri Berry</td>
                                          <td>Chief Marketing Officer (CMO)</td>
                                          <td>New York</td>
                                          <td>40</td>
                                          <td>2009/06/25</td>
                                          <td>$675,000</td>
                                      </tr>
                                      <tr>
                                          <td>Cara Stevens</td>
                                          <td>Sales Assistant</td>
                                          <td>New York</td>
                                          <td>46</td>
                                          <td>2011/12/06</td>
                                          <td>$145,600</td>
                                      </tr>
                                      <tr>
                                          <td>Hermione Butler</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2011/03/21</td>
                                          <td>$356,250</td>
                                      </tr>
                                      <tr>
                                          <td>Lael Greer</td>
                                          <td>Systems Administrator</td>
                                          <td>London</td>
                                          <td>21</td>
                                          <td>2009/02/27</td>
                                          <td>$103,500</td>
                                      </tr>
                                      <tr>
                                          <td>Jonas Alexander</td>
                                          <td>Developer</td>
                                          <td>San Francisco</td>
                                          <td>30</td>
                                          <td>2010/07/14</td>
                                          <td>$86,500</td>
                                      </tr>
                                      <tr>
                                          <td>Shad Decker</td>
                                          <td>Regional Director</td>
                                          <td>Edinburgh</td>
                                          <td>51</td>
                                          <td>2008/11/13</td>
                                          <td>$183,000</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011/06/27</td>
                                          <td>$183,000</td>
                                      </tr>
                                      <tr>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td>New York</td>
                                          <td>27</td>
                                          <td>2011/01/25</td>
                                          <td>$112,000</td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Zero configuration table -->
  <!-- Row grouping -->
  <section id="row-grouping">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Row grouping</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <p class="card-text">Although DataTables doesn't have row grouping built-in (picking one of the many methods available would overly limit the DataTables core), it is most certainly possible to give the look and feel of row grouping.</p>
                          <div class="table-responsive">
                              <table class="table row-grouping">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                      </tr>
                                      <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>New York</td>
                                          <td>30</td>
                                          <td>2011/09/03</td>
                                          <td>$345,000</td>
                                      </tr>
                                      <tr>
                                          <td>Doris Wilder</td>
                                          <td>Sales Assistant</td>
                                          <td>Sidney</td>
                                          <td>23</td>
                                          <td>2010/09/20</td>
                                          <td>$85,600</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer Chang</td>
                                          <td>Regional Director</td>
                                          <td>Singapore</td>
                                          <td>28</td>
                                          <td>2010/11/14</td>
                                          <td>$357,650</td>
                                      </tr>
                                      <tr>
                                          <td>Shou Itou</td>
                                          <td>Regional Marketing</td>
                                          <td>Tokyo</td>
                                          <td>20</td>
                                          <td>2011/08/14</td>
                                          <td>$163,000</td>
                                      </tr>
                                      <tr>
                                          <td>Michelle House</td>
                                          <td>Integration Specialist</td>
                                          <td>Sidney</td>
                                          <td>37</td>
                                          <td>2011/06/02</td>
                                          <td>$95,400</td>
                                      </tr>
                                      <tr>
                                          <td>Prescott Bartlett</td>
                                          <td>Technical Author</td>
                                          <td>London</td>
                                          <td>27</td>
                                          <td>2011/05/07</td>
                                          <td>$145,000</td>
                                      </tr>
                                      <tr>
                                          <td>Martena Mccray</td>
                                          <td>Post-Sales support</td>
                                          <td>Edinburgh</td>
                                          <td>46</td>
                                          <td>2011/03/09</td>
                                          <td>$324,050</td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Row grouping -->

  <!-- Complex headers table -->
  <section id="headers">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Complex headers</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <p class="card-text">When using tables to display data, you will often wish to display column information in groups. DataTables fully supports colspan and rowspan in the table's header, assigning the required order listeners to the TH element suitable for that column. Need to add <code>.complex-headers</code> class for styling.</p>
                          <div class="table-responsive">
                              <table class="table table-striped table-bordered complex-headers">
                                  <thead>
                                      <tr>
                                          <th rowspan="2">Name</th>
                                          <th colspan="2">HR Information</th>
                                          <th colspan="3">Contact</th>
                                      </tr>
                                      <tr>
                                          <th>Position</th>
                                          <th>Salary</th>
                                          <th>Office</th>
                                          <th>Extn.</th>
                                          <th>E-mail</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>$320,800</td>
                                          <td>Edinburgh</td>
                                          <td>5421</td>
                                          <td>t.nixon@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>$170,750</td>
                                          <td>Tokyo</td>
                                          <td>8422</td>
                                          <td>g.winters@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Ashton Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>$86,000</td>
                                          <td>San Francisco</td>
                                          <td>1562</td>
                                          <td>a.cox@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Cedric Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>$433,060</td>
                                          <td>Edinburgh</td>
                                          <td>6224</td>
                                          <td>c.kelly@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>$162,700</td>
                                          <td>Tokyo</td>
                                          <td>5407</td>
                                          <td>a.satou@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>$372,000</td>
                                          <td>New York</td>
                                          <td>4804</td>
                                          <td>b.williamson@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>$137,500</td>
                                          <td>San Francisco</td>
                                          <td>9608</td>
                                          <td>h.chandler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Rhona Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>$327,900</td>
                                          <td>Tokyo</td>
                                          <td>6200</td>
                                          <td>r.davidson@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>$205,500</td>
                                          <td>San Francisco</td>
                                          <td>2360</td>
                                          <td>c.hurst@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Sonya Frost</td>
                                          <td>Software Engineer</td>
                                          <td>$103,600</td>
                                          <td>Edinburgh</td>
                                          <td>1667</td>
                                          <td>s.frost@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>$90,560</td>
                                          <td>London</td>
                                          <td>3814</td>
                                          <td>j.gaines@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>$342,000</td>
                                          <td>Edinburgh</td>
                                          <td>9497</td>
                                          <td>q.flynn@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Charde Marshall</td>
                                          <td>Regional Director</td>
                                          <td>$470,600</td>
                                          <td>San Francisco</td>
                                          <td>6741</td>
                                          <td>c.marshall@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Haley Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>$313,500</td>
                                          <td>London</td>
                                          <td>3597</td>
                                          <td>h.kennedy@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>$385,750</td>
                                          <td>London</td>
                                          <td>1965</td>
                                          <td>t.fitzpatrick@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>$198,500</td>
                                          <td>London</td>
                                          <td>1581</td>
                                          <td>m.silva@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Paul Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>$725,000</td>
                                          <td>New York</td>
                                          <td>3059</td>
                                          <td>p.byrd@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>$237,500</td>
                                          <td>New York</td>
                                          <td>1721</td>
                                          <td>g.little@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Bradley Greer</td>
                                          <td>Software Engineer</td>
                                          <td>$132,000</td>
                                          <td>London</td>
                                          <td>2558</td>
                                          <td>b.greer@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Dai Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>$217,500</td>
                                          <td>Edinburgh</td>
                                          <td>2290</td>
                                          <td>d.rios@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>$345,000</td>
                                          <td>New York</td>
                                          <td>1937</td>
                                          <td>j.caldwell@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Yuri Berry</td>
                                          <td>Chief Marketing Officer (CMO)</td>
                                          <td>$675,000</td>
                                          <td>New York</td>
                                          <td>6154</td>
                                          <td>y.berry@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Caesar Vance</td>
                                          <td>Pre-Sales Support</td>
                                          <td>$106,450</td>
                                          <td>New York</td>
                                          <td>8330</td>
                                          <td>c.vance@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Doris Wilder</td>
                                          <td>Sales Assistant</td>
                                          <td>$85,600</td>
                                          <td>Sidney</td>
                                          <td>3023</td>
                                          <td>d.wilder@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Angelica Ramos</td>
                                          <td>Chief Executive Officer (CEO)</td>
                                          <td>$1,200,000</td>
                                          <td>London</td>
                                          <td>5797</td>
                                          <td>a.ramos@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Gavin Joyce</td>
                                          <td>Developer</td>
                                          <td>$92,575</td>
                                          <td>Edinburgh</td>
                                          <td>8822</td>
                                          <td>g.joyce@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer Chang</td>
                                          <td>Regional Director</td>
                                          <td>$357,650</td>
                                          <td>Singapore</td>
                                          <td>9239</td>
                                          <td>j.chang@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Brenden Wagner</td>
                                          <td>Software Engineer</td>
                                          <td>$206,850</td>
                                          <td>San Francisco</td>
                                          <td>1314</td>
                                          <td>b.wagner@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Fiona Green</td>
                                          <td>Chief Operating Officer (COO)</td>
                                          <td>$850,000</td>
                                          <td>San Francisco</td>
                                          <td>2947</td>
                                          <td>f.green@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Shou Itou</td>
                                          <td>Regional Marketing</td>
                                          <td>$163,000</td>
                                          <td>Tokyo</td>
                                          <td>8899</td>
                                          <td>s.itou@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Michelle House</td>
                                          <td>Integration Specialist</td>
                                          <td>$95,400</td>
                                          <td>Sidney</td>
                                          <td>2769</td>
                                          <td>m.house@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Suki Burks</td>
                                          <td>Developer</td>
                                          <td>$114,500</td>
                                          <td>London</td>
                                          <td>6832</td>
                                          <td>s.burks@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Prescott Bartlett</td>
                                          <td>Technical Author</td>
                                          <td>$145,000</td>
                                          <td>London</td>
                                          <td>3606</td>
                                          <td>p.bartlett@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Gavin Cortez</td>
                                          <td>Team Leader</td>
                                          <td>$235,500</td>
                                          <td>San Francisco</td>
                                          <td>2860</td>
                                          <td>g.cortez@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Martena Mccray</td>
                                          <td>Post-Sales support</td>
                                          <td>$324,050</td>
                                          <td>Edinburgh</td>
                                          <td>8240</td>
                                          <td>m.mccray@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Unity Butler</td>
                                          <td>Marketing Designer</td>
                                          <td>$85,675</td>
                                          <td>San Francisco</td>
                                          <td>5384</td>
                                          <td>u.butler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Howard Hatfield</td>
                                          <td>Office Manager</td>
                                          <td>$164,500</td>
                                          <td>San Francisco</td>
                                          <td>7031</td>
                                          <td>h.hatfield@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Hope Fuentes</td>
                                          <td>Secretary</td>
                                          <td>$109,850</td>
                                          <td>San Francisco</td>
                                          <td>6318</td>
                                          <td>h.fuentes@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Vivian Harrell</td>
                                          <td>Financial Controller</td>
                                          <td>$452,500</td>
                                          <td>San Francisco</td>
                                          <td>9422</td>
                                          <td>v.harrell@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Timothy Mooney</td>
                                          <td>Office Manager</td>
                                          <td>$136,200</td>
                                          <td>London</td>
                                          <td>7580</td>
                                          <td>t.mooney@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jackson Bradshaw</td>
                                          <td>Director</td>
                                          <td>$645,750</td>
                                          <td>New York</td>
                                          <td>1042</td>
                                          <td>j.bradshaw@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Olivia Liang</td>
                                          <td>Support Engineer</td>
                                          <td>$234,500</td>
                                          <td>Singapore</td>
                                          <td>2120</td>
                                          <td>o.liang@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Bruno Nash</td>
                                          <td>Software Engineer</td>
                                          <td>$163,500</td>
                                          <td>London</td>
                                          <td>6222</td>
                                          <td>b.nash@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Sakura Yamamoto</td>
                                          <td>Support Engineer</td>
                                          <td>$139,575</td>
                                          <td>Tokyo</td>
                                          <td>9383</td>
                                          <td>s.yamamoto@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Thor Walton</td>
                                          <td>Developer</td>
                                          <td>$98,540</td>
                                          <td>New York</td>
                                          <td>8327</td>
                                          <td>t.walton@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Finn Camacho</td>
                                          <td>Support Engineer</td>
                                          <td>$87,500</td>
                                          <td>San Francisco</td>
                                          <td>2927</td>
                                          <td>f.camacho@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Serge Baldwin</td>
                                          <td>Data Coordinator</td>
                                          <td>$138,575</td>
                                          <td>Singapore</td>
                                          <td>8352</td>
                                          <td>s.baldwin@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Zenaida Frank</td>
                                          <td>Software Engineer</td>
                                          <td>$125,250</td>
                                          <td>New York</td>
                                          <td>7439</td>
                                          <td>z.frank@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Zorita Serrano</td>
                                          <td>Software Engineer</td>
                                          <td>$115,000</td>
                                          <td>San Francisco</td>
                                          <td>4389</td>
                                          <td>z.serrano@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer Acosta</td>
                                          <td>Junior Javascript Developer</td>
                                          <td>$75,650</td>
                                          <td>Edinburgh</td>
                                          <td>3431</td>
                                          <td>j.acosta@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Cara Stevens</td>
                                          <td>Sales Assistant</td>
                                          <td>$145,600</td>
                                          <td>New York</td>
                                          <td>3990</td>
                                          <td>c.stevens@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Hermione Butler</td>
                                          <td>Regional Director</td>
                                          <td>$356,250</td>
                                          <td>London</td>
                                          <td>1016</td>
                                          <td>h.butler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Lael Greer</td>
                                          <td>Systems Administrator</td>
                                          <td>$103,500</td>
                                          <td>London</td>
                                          <td>6733</td>
                                          <td>l.greer@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jonas Alexander</td>
                                          <td>Developer</td>
                                          <td>$86,500</td>
                                          <td>San Francisco</td>
                                          <td>8196</td>
                                          <td>j.alexander@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Shad Decker</td>
                                          <td>Regional Director</td>
                                          <td>$183,000</td>
                                          <td>Edinburgh</td>
                                          <td>6373</td>
                                          <td>s.decker@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>$183,000</td>
                                          <td>Singapore</td>
                                          <td>5384</td>
                                          <td>m.bruce@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td>$112,000</td>
                                          <td>New York</td>
                                          <td>4226</td>
                                          <td>d.snider@datatables.net</td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Salary</th>
                                          <th>Office</th>
                                          <th>Extn.</th>
                                          <th>E-mail</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Complex headers table -->

  <!-- Add rows table -->
  <section id="add-row">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Add rows</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                          <p class="card-text">New rows can be added to a DataTable very easily using the ( row.add() ) API method. Simply call the API function with the data that is to be used for the new row (be it an array or object). Multiple rows can be added using the ( rows.add() ) method (note the plural). Data can be likewise be updated with the ( row().data() and row().remove() methods. )
                          </p>
                          <button id="addRow" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; Add new row</button>
                          <div class="table-responsive">
                              <table class="table add-rows">
                                  <thead>
                                      <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th>1.1</th>
                                        <th>1.2</th>
                                        <th>1.3</th>
                                        <th>1.4</th>
                                        <th>1.5</th>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Add rows table -->

  <!-- Column selectors with Export Options and print table -->
  <section id="column-selectors">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Column selectors with Export and Print Options</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <p class="card-text">All of the data export buttons have a exportOptions option which can be used to specify information about what data should be exported and how. The options given for this parameter are passed directly to the buttons.exportData() method to obtain the required data.
                          </p>
                          <p>
                          The print button will open a new window in the end user's browser and, by default, automatically trigger the print function allowing the end user to print the table. The window will be closed once the print is complete, or has been cancelled.
                          </p>
                          <div class="table-responsive">
                              <table class="table table-striped dataex-html5-selectors">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                      </tr>
                                      <tr>
                                          <td>Ashton Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009/01/12</td>
                                          <td>$86,000</td>
                                      </tr>
                                      <tr>
                                          <td>Cedric Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012/03/29</td>
                                          <td>$433,060</td>
                                      </tr>
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$162,700</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                      </tr>
                                      <tr>
                                          <td>Rhona Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010/10/14</td>
                                          <td>$327,900</td>
                                      </tr>
                                      <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009/09/15</td>
                                          <td>$205,500</td>
                                      </tr>
                                      <tr>
                                          <td>Sonya Frost</td>
                                          <td>Software Engineer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008/12/13</td>
                                          <td>$103,600</td>
                                      </tr>
                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                      </tr>
                                      <tr>
                                          <td>Charde Marshall</td>
                                          <td>Regional Director</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008/10/16</td>
                                          <td>$470,600</td>
                                      </tr>
                                      <tr>
                                          <td>Haley Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012/12/18</td>
                                          <td>$313,500</td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010/03/17</td>
                                          <td>$385,750</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012/11/27</td>
                                          <td>$198,500</td>
                                      </tr>
                                      <tr>
                                          <td>Paul Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>New York</td>
                                          <td>64</td>
                                          <td>2010/06/09</td>
                                          <td>$725,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                      </tr>
                                      <tr>
                                          <td>Bradley Greer</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012/10/13</td>
                                          <td>$132,000</td>
                                      </tr>
                                      <tr>
                                          <td>Dai Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012/09/26</td>
                                          <td>$217,500</td>
                                      </tr>
                                      <tr>
                                          <td>Thor Walton</td>
                                          <td>Developer</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2013/08/11</td>
                                          <td>$98,540</td>
                                      </tr>
                                      <tr>
                                          <td>Finn Camacho</td>
                                          <td>Support Engineer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009/07/07</td>
                                          <td>$87,500</td>
                                      </tr>
                                      <tr>
                                          <td>Serge Baldwin</td>
                                          <td>Data Coordinator</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2012/04/09</td>
                                          <td>$138,575</td>
                                      </tr>
                                      <tr>
                                          <td>Zenaida Frank</td>
                                          <td>Software Engineer</td>
                                          <td>New York</td>
                                          <td>63</td>
                                          <td>2010/01/04</td>
                                          <td>$125,250</td>
                                      </tr>

                                      <tr>
                                          <td>Shad Decker</td>
                                          <td>Regional Director</td>
                                          <td>Edinburgh</td>
                                          <td>51</td>
                                          <td>2008/11/13</td>
                                          <td>$183,000</td>
                                      </tr>
                                      <tr>
                                          <td>Michael Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011/06/27</td>
                                          <td>$183,000</td>
                                      </tr>
                                      <tr>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td>New York</td>
                                          <td>27</td>
                                          <td>2011/01/25</td>
                                          <td>$112,000</td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Column selectors with Export Options and print table -->

  <!-- Scroll - horizontal and vertical table -->
  <section id="horizontal-vertical">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Scroll - horizontal and vertical</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <p class="card-text">In this example you can see DataTables doing both horizontal and vertical scrolling at the same time. Note also that pagination is enabled in this example, and the scrolling accounts for this.</p>
                          <div class="table-responsive">
                              <table class="table nowrap scroll-horizontal-vertical">
                                  <thead>
                                      <tr>
                                          <th>First name</th>
                                          <th>Last name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                          <th>Extn.</th>
                                          <th>E-mail</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger</td>
                                          <td>Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>5421</td>
                                          <td>t.nixon@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Garrett</td>
                                          <td>Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                          <td>8422</td>
                                          <td>g.winters@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Ashton</td>
                                          <td>Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009/01/12</td>
                                          <td>$86,000</td>
                                          <td>1562</td>
                                          <td>a.cox@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Cedric</td>
                                          <td>Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012/03/29</td>
                                          <td>$433,060</td>
                                          <td>6224</td>
                                          <td>c.kelly@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Airi</td>
                                          <td>Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$162,700</td>
                                          <td>5407</td>
                                          <td>a.satou@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle</td>
                                          <td>Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                          <td>4804</td>
                                          <td>b.williamson@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod</td>
                                          <td>Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                          <td>9608</td>
                                          <td>h.chandler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Rhona</td>
                                          <td>Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010/10/14</td>
                                          <td>$327,900</td>
                                          <td>6200</td>
                                          <td>r.davidson@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Colleen</td>
                                          <td>Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009/09/15</td>
                                          <td>$205,500</td>
                                          <td>2360</td>
                                          <td>c.hurst@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Sonya</td>
                                          <td>Frost</td>
                                          <td>Software Engineer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008/12/13</td>
                                          <td>$103,600</td>
                                          <td>1667</td>
                                          <td>s.frost@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jena</td>
                                          <td>Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                          <td>3814</td>
                                          <td>j.gaines@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn</td>
                                          <td>Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                          <td>9497</td>
                                          <td>q.flynn@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Charde</td>
                                          <td>Marshall</td>
                                          <td>Regional Director</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008/10/16</td>
                                          <td>$470,600</td>
                                          <td>6741</td>
                                          <td>c.marshall@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Haley</td>
                                          <td>Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012/12/18</td>
                                          <td>$313,500</td>
                                          <td>3597</td>
                                          <td>h.kennedy@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana</td>
                                          <td>Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010/03/17</td>
                                          <td>$385,750</td>
                                          <td>1965</td>
                                          <td>t.fitzpatrick@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Michael</td>
                                          <td>Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012/11/27</td>
                                          <td>$198,500</td>
                                          <td>1581</td>
                                          <td>m.silva@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Paul</td>
                                          <td>Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>New York</td>
                                          <td>64</td>
                                          <td>2010/06/09</td>
                                          <td>$725,000</td>
                                          <td>3059</td>
                                          <td>p.byrd@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria</td>
                                          <td>Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                          <td>1721</td>
                                          <td>g.little@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Bradley</td>
                                          <td>Greer</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012/10/13</td>
                                          <td>$132,000</td>
                                          <td>2558</td>
                                          <td>b.greer@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Dai</td>
                                          <td>Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012/09/26</td>
                                          <td>$217,500</td>
                                          <td>2290</td>
                                          <td>d.rios@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jenette</td>
                                          <td>Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>New York</td>
                                          <td>30</td>
                                          <td>2011/09/03</td>
                                          <td>$345,000</td>
                                          <td>1937</td>
                                          <td>j.caldwell@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Yuri</td>
                                          <td>Berry</td>
                                          <td>Chief Marketing Officer (CMO)</td>
                                          <td>New York</td>
                                          <td>40</td>
                                          <td>2009/06/25</td>
                                          <td>$675,000</td>
                                          <td>6154</td>
                                          <td>y.berry@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Caesar</td>
                                          <td>Vance</td>
                                          <td>Pre-Sales Support</td>
                                          <td>New York</td>
                                          <td>21</td>
                                          <td>2011/12/12</td>
                                          <td>$106,450</td>
                                          <td>8330</td>
                                          <td>c.vance@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Doris</td>
                                          <td>Wilder</td>
                                          <td>Sales Assistant</td>
                                          <td>Sidney</td>
                                          <td>23</td>
                                          <td>2010/09/20</td>
                                          <td>$85,600</td>
                                          <td>3023</td>
                                          <td>d.wilder@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Angelica</td>
                                          <td>Ramos</td>
                                          <td>Chief Executive Officer (CEO)</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2009/10/09</td>
                                          <td>$1,200,000</td>
                                          <td>5797</td>
                                          <td>a.ramos@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Gavin</td>
                                          <td>Joyce</td>
                                          <td>Developer</td>
                                          <td>Edinburgh</td>
                                          <td>42</td>
                                          <td>2010/12/22</td>
                                          <td>$92,575</td>
                                          <td>8822</td>
                                          <td>g.joyce@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer</td>
                                          <td>Chang</td>
                                          <td>Regional Director</td>
                                          <td>Singapore</td>
                                          <td>28</td>
                                          <td>2010/11/14</td>
                                          <td>$357,650</td>
                                          <td>9239</td>
                                          <td>j.chang@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Martena</td>
                                          <td>Mccray</td>
                                          <td>Post-Sales support</td>
                                          <td>Edinburgh</td>
                                          <td>46</td>
                                          <td>2011/03/09</td>
                                          <td>$324,050</td>
                                          <td>8240</td>
                                          <td>m.mccray@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Unity</td>
                                          <td>Butler</td>
                                          <td>Marketing Designer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009/12/09</td>
                                          <td>$85,675</td>
                                          <td>5384</td>
                                          <td>u.butler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Howard</td>
                                          <td>Hatfield</td>
                                          <td>Office Manager</td>
                                          <td>San Francisco</td>
                                          <td>51</td>
                                          <td>2008/12/16</td>
                                          <td>$164,500</td>
                                          <td>7031</td>
                                          <td>h.hatfield@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Hope</td>
                                          <td>Fuentes</td>
                                          <td>Secretary</td>
                                          <td>San Francisco</td>
                                          <td>41</td>
                                          <td>2010/02/12</td>
                                          <td>$109,850</td>
                                          <td>6318</td>
                                          <td>h.fuentes@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Vivian</td>
                                          <td>Harrell</td>
                                          <td>Financial Controller</td>
                                          <td>San Francisco</td>
                                          <td>62</td>
                                          <td>2009/02/14</td>
                                          <td>$452,500</td>
                                          <td>9422</td>
                                          <td>v.harrell@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Timothy</td>
                                          <td>Mooney</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>37</td>
                                          <td>2008/12/11</td>
                                          <td>$136,200</td>
                                          <td>7580</td>
                                          <td>t.mooney@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jackson</td>
                                          <td>Bradshaw</td>
                                          <td>Director</td>
                                          <td>New York</td>
                                          <td>65</td>
                                          <td>2008/09/26</td>
                                          <td>$645,750</td>
                                          <td>1042</td>
                                          <td>j.bradshaw@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Olivia</td>
                                          <td>Liang</td>
                                          <td>Support Engineer</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2011/02/03</td>
                                          <td>$234,500</td>
                                          <td>2120</td>
                                          <td>o.liang@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Bruno</td>
                                          <td>Nash</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>38</td>
                                          <td>2011/05/03</td>
                                          <td>$163,500</td>
                                          <td>6222</td>
                                          <td>b.nash@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Sakura</td>
                                          <td>Yamamoto</td>
                                          <td>Support Engineer</td>
                                          <td>Tokyo</td>
                                          <td>37</td>
                                          <td>2009/08/19</td>
                                          <td>$139,575</td>
                                          <td>9383</td>
                                          <td>s.yamamoto@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Thor</td>
                                          <td>Walton</td>
                                          <td>Developer</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2013/08/11</td>
                                          <td>$98,540</td>
                                          <td>8327</td>
                                          <td>t.walton@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Finn</td>
                                          <td>Camacho</td>
                                          <td>Support Engineer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009/07/07</td>
                                          <td>$87,500</td>
                                          <td>2927</td>
                                          <td>f.camacho@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Serge</td>
                                          <td>Baldwin</td>
                                          <td>Data Coordinator</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2012/04/09</td>
                                          <td>$138,575</td>
                                          <td>8352</td>
                                          <td>s.baldwin@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Zenaida</td>
                                          <td>Frank</td>
                                          <td>Software Engineer</td>
                                          <td>New York</td>
                                          <td>63</td>
                                          <td>2010/01/04</td>
                                          <td>$125,250</td>
                                          <td>7439</td>
                                          <td>z.frank@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Zorita</td>
                                          <td>Serrano</td>
                                          <td>Software Engineer</td>
                                          <td>San Francisco</td>
                                          <td>56</td>
                                          <td>2012/06/01</td>
                                          <td>$115,000</td>
                                          <td>4389</td>
                                          <td>z.serrano@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer</td>
                                          <td>Acosta</td>
                                          <td>Junior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>43</td>
                                          <td>2013/02/01</td>
                                          <td>$75,650</td>
                                          <td>3431</td>
                                          <td>j.acosta@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Cara</td>
                                          <td>Stevens</td>
                                          <td>Sales Assistant</td>
                                          <td>New York</td>
                                          <td>46</td>
                                          <td>2011/12/06</td>
                                          <td>$145,600</td>
                                          <td>3990</td>
                                          <td>c.stevens@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Hermione</td>
                                          <td>Butler</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2011/03/21</td>
                                          <td>$356,250</td>
                                          <td>1016</td>
                                          <td>h.butler@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Lael</td>
                                          <td>Greer</td>
                                          <td>Systems Administrator</td>
                                          <td>London</td>
                                          <td>21</td>
                                          <td>2009/02/27</td>
                                          <td>$103,500</td>
                                          <td>6733</td>
                                          <td>l.greer@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Jonas</td>
                                          <td>Alexander</td>
                                          <td>Developer</td>
                                          <td>San Francisco</td>
                                          <td>30</td>
                                          <td>2010/07/14</td>
                                          <td>$86,500</td>
                                          <td>8196</td>
                                          <td>j.alexander@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Shad</td>
                                          <td>Decker</td>
                                          <td>Regional Director</td>
                                          <td>Edinburgh</td>
                                          <td>51</td>
                                          <td>2008/11/13</td>
                                          <td>$183,000</td>
                                          <td>6373</td>
                                          <td>s.decker@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Michael</td>
                                          <td>Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011/06/27</td>
                                          <td>$183,000</td>
                                          <td>5384</td>
                                          <td>m.bruce@datatables.net</td>
                                      </tr>
                                      <tr>
                                          <td>Donna</td>
                                          <td>Snider</td>
                                          <td>Customer Support</td>
                                          <td>New York</td>
                                          <td>27</td>
                                          <td>2011/01/25</td>
                                          <td>$112,000</td>
                                          <td>4226</td>
                                          <td>d.snider@datatables.net</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Scroll - horizontal and vertical table -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script>
@endsection
