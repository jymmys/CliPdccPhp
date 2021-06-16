/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

import java.util.List;

import org.sieca.everis.pdcc.model.transbordoMercancia.Manifiesto;
import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ManifiestoCargaCrearRq extends RequestBody{
	
	private Manifiesto manifiesto;
    private MedioTransporte medioTransporte;
    private Contenedor contenedor;
    private ConocimientoEmbarque conocimientoEmbarque;
    private List<ListaArticulo> listaArticulos;
    private String estado;
	/**
	 * 
	 */
	public ManifiestoCargaCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the manifiesto
	 */
	public Manifiesto getManifiesto() {
		return manifiesto;
	}
	/**
	 * @param manifiesto the manifiesto to set
	 */
	public void setManifiesto(Manifiesto manifiesto) {
		this.manifiesto = manifiesto;
	}
	/**
	 * @return the medioTransporte
	 */
	public MedioTransporte getMedioTransporte() {
		return medioTransporte;
	}
	/**
	 * @param medioTransporte the medioTransporte to set
	 */
	public void setMedioTransporte(MedioTransporte medioTransporte) {
		this.medioTransporte = medioTransporte;
	}
	/**
	 * @return the contenedor
	 */
	public Contenedor getContenedor() {
		return contenedor;
	}
	/**
	 * @param contenedor the contenedor to set
	 */
	public void setContenedor(Contenedor contenedor) {
		this.contenedor = contenedor;
	}
	/**
	 * @return the conocimientoEmbarque
	 */
	public ConocimientoEmbarque getConocimientoEmbarque() {
		return conocimientoEmbarque;
	}
	/**
	 * @param conocimientoEmbarque the conocimientoEmbarque to set
	 */
	public void setConocimientoEmbarque(ConocimientoEmbarque conocimientoEmbarque) {
		this.conocimientoEmbarque = conocimientoEmbarque;
	}
	/**
	 * @return the listaArticulos
	 */
	public List<ListaArticulo> getListaArticulos() {
		return listaArticulos;
	}
	/**
	 * @param listaArticulos the listaArticulos to set
	 */
	public void setListaArticulos(List<ListaArticulo> listaArticulos) {
		this.listaArticulos = listaArticulos;
	}
	/**
	 * @return the estado
	 */
	public String getEstado() {
		return estado;
	}
	/**
	 * @param estado the estado to set
	 */
	public void setEstado(String estado) {
		this.estado = estado;
	}

    
}
