<?php

namespace Caiocesar173\Utils\Classes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Datatable extends Model
{
    protected $table;
    protected $limit;
    protected $offset;
    protected $firstSort;
    protected $pathRequest;
    protected $columnSearch;
    protected $columnFilter;
    protected $field;
    protected $filter;
    protected $searchValue;
    protected $defaultSort;
    protected $page;
    protected $select;
    protected $join;
    protected $where;
    protected $from;
    protected $to;
    protected $operatorSearch;
    protected $simCardStatus;
    protected $simConnStatus;
    protected $groupBy;
    protected $where_in;

    public function __construct($request, $table, $columnSearch, $defaultSort, $where = [], $select = null, $join = [], $columnFilter = [], $dateFormat = false, $groupBy = null, $where_in = [])
    {
        $this->pathRequest   = $request->server('REDIRECT_SCRIPT_URI');
        $this->defaultSort   = $defaultSort;
        $this->columnSearch  = $columnSearch;
        $this->select        = $select;
        $this->join          = $join;   
        $this->where         = $where;
        $this->columnFilter  = $columnFilter;
        $this->groupBy       = $groupBy != null ? DB::raw($groupBy) : $groupBy;
        $this->where_in      = $where_in;
        
        $this->setDateFormat($dateFormat);
        $this->setTable($table);
        $this->getRequest($request);
        $this->setOffset($this->offset);
        $this->setOrderBy();
    }

    public function getRequest($request)
    {
        if($request->input('per_page'))
            $this->limit = $request->input('per_page') > 100 ? 100 : $request->input('per_page');
        else
            $this->limit = 10;
        
        $this->offset           = $request->input('page') ? $request->input('page') - 1 : 0;
        $this->firstSort        = $request->input('sort');
        $this->searchValue      = $request->input('search');
        $this->operatorSearch   = $request->input('operator');
        $this->simCardStatus    = $request->input('status');
        $this->simConnStatus    = $request->input('section');
        $this->field            = $request->input('field'); 
        $this->filter           = $request->input('filters');
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function setDateFormat($status)
    {
        if($status)
            DB::select(DB::raw("SET @@lc_time_names = 'pt_BR';"));
    }

    public function setOffset($offset)
    {
        $this->page  = $offset + 1;
        if ($offset != 0) {
            $offset =  ($offset * $this->limit) - 1;
            $this->from  = $offset+2;
            $this->to    = $offset+1+$this->limit;
        } else {
            $offset = 0;
            $this->from  = 1;
            $this->to    = $this->limit;
        }
        $this->offset = $offset;
    }

    public function setOrderBy()
    {
        if ($this->firstSort == null) {
            $this->firstSort = $this->defaultSort;
        }

        $sort = explode('|', $this->firstSort);
        $order = $sort[0];
        $dir = $sort[1] != null ? $sort[1] : 'desc';
        $this->order = $order;
        $this->dir   = $dir;
    }

    public function getData()
    {
        return DB::table($this->table)
            ->select(DB::raw($this->select))
            ->when(!empty($this->join), function ($query) {
                foreach ($this->join as $join) {
                    if (isset($join[3])) {
                        switch ($join[3]) {
                            case 'left':
                                $query->leftJoin($join[0], $join[1], "=", $join[2]);
                                break;
                            case 'right':
                                $query->rightJoin($join[0], $join[1], "=", $join[2]);
                                break;
                        }
                    } else {
                        $query->join($join[0], $join[1], "=", $join[2]);
                    }
                }
            })->when(!empty($this->where), function ($query) {
                foreach ($this->where as $where) {
                    $query->Where($where[0], $where[1], $where[2]);
                }
            })
            ->when(!empty($this->searchValue) && !empty($this->field), function ($query) {
                $query->where($this->columnSearch[$this->field], 'like', '%' . $this->searchValue . '%');
            })
            ->when(!empty($this->filter), function ($query) {
                foreach($this->filter as $key => $value) {
                    if(array_key_exists($key, $this->columnFilter) && $value != null)
                        $query->where($this->columnFilter[$key], 'like', "%$value%");
                }
            })
            ->when($this->groupBy, function ($query) {
                $query->groupBy($this->groupBy);
            })
            ->when(is_numeric($this->limit), function ($query) {
                $query->limit($this->limit);
                $query->offset($this->offset);
            })
            ->when(!empty($this->where_in), function ($query) {
                foreach ($this->where_in as $where_in) {
                    $query->WhereIn($where_in[0], $where_in[1]);
                }
            })
            ->orderBy($this->order, $this->dir)
            ->get();
    }

    public function countFiltered()
    {
        return DB::table($this->table)
            ->when(!empty($this->join), function ($query) {
                foreach ($this->join as $join) {
                    if (isset($join[3]))
                        switch ($join[3]) {
                            case 'left': $query->leftJoin($join[0], $join[1], "=", $join[2]); break;
                            case 'right': $query->rightJoin($join[0], $join[1], "=", $join[2]); break;
                        }
                    else if(isset($join[0]))
                        $query->join($join[0], $join[1], "=", $join[2]);
                }
            })->when(!empty($this->where), function ($query) {
                foreach ($this->where as $where) {
                    $query->Where($where[0], $where[1], $where[2]);
                }
            })
            ->when(!empty($this->searchValue) && !empty($this->field), function ($query) {
                $query->where($this->columnSearch[$this->field], 'like', '%' . $this->searchValue . '%');
            })
            ->when(!empty($this->filter), function ($query) {
                foreach($this->filter as $key => $value) {
                    if(array_key_exists($key, $this->columnFilter) && $value != null)
                        $query->where($this->columnFilter[$key], '=', $value);
                }
            })
            ->when(!empty($this->where_in), function ($query) {
                foreach ($this->where_in as $where_in) {
                    $query->WhereIn($where_in[0], $where_in[1]);
                }
            })
            ->when($this->groupBy, function ($query) {
                $query->groupBy($this->groupBy);
            })
            ->count();
    }

    public function getTotalData()
    {
        return intval(DB::table($this->table)
        ->when(!empty($this->join), function ($query) {
            foreach ($this->join as $join) {
                if (isset($join[3]))
                    switch ($join[3]) {
                        case 'left': $query->leftJoin($join[0], $join[1], "=", $join[2]); break;
                        case 'right': $query->rightJoin($join[0], $join[1], "=", $join[2]); break;
                    }
                else if(isset($join[0]))
                    $query->join($join[0], $join[1], "=", $join[2]);
            }
        })->when(!empty($this->where), function ($query) {
            foreach ($this->where as $where) {
                $query->Where($where[0], $where[1], $where[2]);
            }
        })
        ->when(!empty($this->searchValue) && !empty($this->field), function ($query) {
            $query->where($this->columnSearch[$this->field], 'like', '%' . $this->searchValue . '%');
        })
        ->when(!empty($this->filter), function ($query) {
            foreach($this->filter as $key => $value) {
                if(array_key_exists($key, $this->columnFilter) && $value != null)
                    $query->where($this->columnFilter[$key], '=', $value);
            }
        })
        ->when(!empty($this->where_in), function ($query) {
            foreach ($this->where_in as $where_in) {
                $query->WhereIn($where_in[0], $where_in[1]);
            }
        })
        ->count());
    }

    public function pegarUrlPagina($tipo)
    {
        if ($tipo == 'proxima')
            $pagina = ($this->page + 1) <= ceil(intval($this->totalData) / $this->limit) ? $this->page + 1 : $this->page;
        else
            $pagina = $this->page - 1 > 0 ? $this->page - 1 : 1;

        $page = $pagina <= ceil(round(intval($this->totalData) / $this->limit)) ? $this->page : 1;
        $url = $this->pathRequest . "?sort=$this->firstSort&page=$pagina&per_page=$this->limit";
        return $url;
    }

    public function pegarUltimaPagina($totalData, $limit)
    {
        return ceil(intval($totalData) / $limit) > 0 ? ceil(intval($totalData) / $limit) : 1;
    }

    public function montarJson($data = [])
    {
        $totalData     = $this->getTotalData();
        $totalFiltered = $this->countFiltered();
        $nextPage      = $this->pegarUrlPagina('proxima');
        $previousPage  = $this->pegarUrlPagina('anterior');
        $ultimaPagina  = $this->pegarUltimaPagina($totalData, $this->limit);

        if (empty($data)) {
            $dados = $this->getData();

            if (!empty($dados)) {
                foreach ($dados as $dado) {
                    $data[] = $dado;
                }
            }
        }

        $json_data = [
            "status"          => true,
            "per_page"        => $this->limit,
            "total"           => $totalData,
            "current_page"    => $this->page,
            "total_filtered"  => $totalFiltered,
            "next_page_url"   => $nextPage,
            "prev_page_url"   => $previousPage,
            "last_page"       => $ultimaPagina,
            "from"            => $this->from,
            "to"              => $totalData < $this->to ? $totalData : $this->to,
            "data"            => $data,
        ];

        return $json_data;
    }

    public function teste()
    {
        foreach ($this->columnSearch as $coluna) {
            if (is_array($coluna))
                echo key($coluna) . ' ' . $coluna[key($coluna)]['valor'];
            
        }
    }

    private function getFilter()
    {
        $filterArray = [];

        if(!empty($this->operatorSearch) && isset($this->operatorSearch)){
            $filterArray[] = array(
                'stock.id_provider',
                $this->operatorSearch,
            );
        }
        if(!empty($this->simCardStatus) && isset($this->simCardStatus)){
            $filterArray[] = array(
                'sl.status',
                $this->simCardStatus,
            );
        }
        if(!empty($this->simConnStatus)){
            $filterArray[] = array(
                'sim.conn_status',
                $this->simConnStatus,
            );
        }

        return $filterArray;
    }
}