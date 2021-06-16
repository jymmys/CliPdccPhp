/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

import java.util.List;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class TransbordoMercanciaActualizarRq extends RequestBody{
	
    private Registro registro;
    private Manifiesto manifiesto;
    private MedioTransporteDetalle medioTransporteDetalle;
    private Contenedor contenedor;
    private ConocimientoEmbarque conocimientoEmbarque;
    private Consignatario consignatario;
    private List<Articulo> articulos;
    private String estado;
	/**
	 * 
	 */
	public TransbordoMercanciaActualizarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the registro
	 */
	public Registro getRegistro() {
		return registro;
	}
	/**
	 * @param registro the registro to set
	 */
	public void setRegistro(Registro registro) {
		this.registro = registro;
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
	 * @return the medioTransporteDetalle
	 */
	public MedioTransporteDetalle getMedioTransporteDetalle() {
		return medioTransporteDetalle;
	}
	/**
	 * @param medioTransporteDetalle the medioTransporteDetalle to set
	 */
	public void setMedioTransporteDetalle(MedioTransporteDetalle medioTransporteDetalle) {
		this.medioTransporteDetalle = medioTransporteDetalle;
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
	 * @return the consignatario
	 */
	public Consignatario getConsignatario() {
		return consignatario;
	}
	/**
	 * @param consignatario the consignatario to set
	 */
	public void setConsignatario(Consignatario consignatario) {
		this.consignatario = consignatario;
	}
	/**
	 * @return the articulos
	 */
	public List<Articulo> getArticulos() {
		return articulos;
	}
	/**
	 * @param articulos the articulos to set
	 */
	public void setArticulos(List<Articulo> articulos) {
		this.articulos = articulos;
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
