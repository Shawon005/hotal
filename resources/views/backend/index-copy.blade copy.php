@extends('backend.layout.master')
  @section('content')
        <div class="page-content page-content-white">
            
            <div class="container">        
                
                <div class="row">
                    <!-- Table -->
                    <div class="col-md-6">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Simple sortable table</h2>
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable_simple">
                                    <thead>
                                        <tr>                                                    
                                            <th width="50">ISO2</th>
                                            <th width="50">ISO3</th>
                                            <th>Name</th>                                                    
                                            <th width="100">Region</th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                                    
                                            <td>AD</td>
                                            <td>AND</td>
                                            <td>Andorra</td>
                                            <td>Europe</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>AR</td>
                                            <td>ARG</td>
                                            <td>Argentina</td>
                                            <td>USA</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>BG</td>
                                            <td>BGR</td>
                                            <td>Bulgaria</td>
                                            <td>Europe</td>                                    
                                        </tr>
                                        <tr>                                                                                                        
                                            <td>BR</td>
                                            <td>BRA</td>
                                            <td>Brazil</td>
                                            <td>USA</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>CA</td>
                                            <td>CAN</td>
                                            <td>Canada</td>
                                            <td>USA</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>CH</td>
                                            <td>CHE</td>
                                            <td>Switzerland</td>
                                            <td>Europe</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>CN</td>
                                            <td>CHN</td>
                                            <td>China</td>
                                            <td>Asia</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>DE</td>
                                            <td>DEU</td>
                                            <td>Germany</td>
                                            <td>Europe</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>FR</td>
                                            <td>FRA</td>
                                            <td>France</td>
                                            <td>Europe</td>                                    
                                        </tr>
                                        <tr>                                                    
                                            <td>GB</td>
                                            <td>GBR</td>
                                            <td>United Kingdom</td>
                                            <td>Europe</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>                        
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Sortable table with checkall and pagination</h2>
                            </div>
                            <div class="content">
                                
                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable_default">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th width="25%">ID</th>
                                            <th width="25%">Name</th>
                                            <th width="25%">E-mail</th>
                                            <th width="25%">Phone</th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>101</td>
                                            <td>Dmitry</td>
                                            <td>dmitry@domain.com</td>
                                            <td>+98(765)432-10-98</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>102</td>
                                            <td>Alex</td>
                                            <td>alex@domain.com</td>
                                            <td>+98(765)432-10-99</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>103</td>
                                            <td>John</td>
                                            <td>john@domain.com</td>
                                            <td>+98(765)432-10-97</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>104</td>
                                            <td>Angelina</td>
                                            <td>angelina@domain.com</td>
                                            <td>+98(765)432-10-90</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>105</td>
                                            <td>Tom</td>
                                            <td>tom@domain.com</td>
                                            <td>+98(765)432-10-92</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>106</td>
                                            <td>Helen</td>
                                            <td>helen@domain.com</td>
                                            <td>+98(765)432-11-33</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>107</td>
                                            <td>Aqvatarius</td>
                                            <td>aqvatarius@domain.com</td>
                                            <td>+98(765)432-15-66</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>108</td>
                                            <td>Olga</td>
                                            <td>olga@domain.com</td>
                                            <td>+98(765)432-11-97</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>109</td>
                                            <td>Homer</td>
                                            <td>homer@domain.com</td>
                                            <td>+98(765)432-11-90</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>110</td>
                                            <td>Tifany</td>
                                            <td>tifany@domain.com</td>
                                            <td>+98(765)432-11-92</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>                
                        
                    </div>
                    <div class="col-md-12">
                
                        <div class="block block-fill-white">
                            <div class="header">
                                <h2>Sortable table</h2>                                        
                            </div>
                            <div class="content">

                                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="checkall"/></th>
                                            <th width="25%">ID</th>
                                            <th width="25%">Name</th>
                                            <th width="25%">E-mail</th>
                                            <th width="25%">Phone</th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>101</td>
                                            <td>Dmitry</td>
                                            <td>dmitry@domain.com</td>
                                            <td>+98(765)432-10-98</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>102</td>
                                            <td>Alex</td>
                                            <td>alex@domain.com</td>
                                            <td>+98(765)432-10-99</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>103</td>
                                            <td>John</td>
                                            <td>john@domain.com</td>
                                            <td>+98(765)432-10-97</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>104</td>
                                            <td>Angelina</td>
                                            <td>angelina@domain.com</td>
                                            <td>+98(765)432-10-90</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>105</td>
                                            <td>Tom</td>
                                            <td>tom@domain.com</td>
                                            <td>+98(765)432-10-92</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>106</td>
                                            <td>Helen</td>
                                            <td>helen@domain.com</td>
                                            <td>+98(765)432-11-33</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>107</td>
                                            <td>Aqvatarius</td>
                                            <td>aqvatarius@domain.com</td>
                                            <td>+98(765)432-15-66</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>108</td>
                                            <td>Olga</td>
                                            <td>olga@domain.com</td>
                                            <td>+98(765)432-11-97</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>109</td>
                                            <td>Homer</td>
                                            <td>homer@domain.com</td>
                                            <td>+98(765)432-11-90</td>                                    
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox"/></td>
                                            <td>110</td>
                                            <td>Tifany</td>
                                            <td>tifany@domain.com</td>
                                            <td>+98(765)432-11-92</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>                                        

                            </div>
                        </div>
                  
                    </div>

                </div>
                
            </div>            
            
        </div>
   @endsection