/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class ConocimientoEmbarque {
	
	private double cantidadTotalBulto; 
	private String fechaConocimientoEmbarque; 
	private String lugarDesembarque; 
	private String lugarEmbarque; 
	private String numeroConocimientoMaestro; 
	private String numeroDocumentoEmbarque; 
	private double pesoBruto; 
	private double pesoBrutoTotal; 
	private String tipoEmbarque;
	/**
	 * 
	 */
	public ConocimientoEmbarque() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param cantidadTotalBulto
	 * @param fechaConocimientoEmbarque
	 * @param lugarDesembarque
	 * @param lugarEmbarque
	 * @param numeroConocimientoMaestro
	 * @param numeroDocumentoEmbarque
	 * @param pesoBruto
	 * @param pesoBrutoTotal
	 * @param tipoEmbarque
	 */
	public ConocimientoEmbarque(double cantidadTotalBulto, String fechaConocimientoEmbarque, String lugarDesembarque,
			String lugarEmbarque, String numeroConocimientoMaestro, String numeroDocumentoEmbarque, double pesoBruto,
			double pesoBrutoTotal, String tipoEmbarque) {
		super();
		this.cantidadTotalBulto = cantidadTotalBulto;
		this.fechaConocimientoEmbarque = fechaConocimientoEmbarque;
		this.lugarDesembarque = lugarDesembarque;
		this.lugarEmbarque = lugarEmbarque;
		this.numeroConocimientoMaestro = numeroConocimientoMaestro;
		this.numeroDocumentoEmbarque = numeroDocumentoEmbarque;
		this.pesoBruto = pesoBruto;
		this.pesoBrutoTotal = pesoBrutoTotal;
		this.tipoEmbarque = tipoEmbarque;
	}
	/**
	 * @return the cantidadTotalBulto
	 */
	public double getCantidadTotalBulto() {
		return cantidadTotalBulto;
	}
	/**
	 * @param cantidadTotalBulto the cantidadTotalBulto to set
	 */
	public void setCantidadTotalBulto(double cantidadTotalBulto) {
		this.cantidadTotalBulto = cantidadTotalBulto;
	}
	/**
	 * @return the fechaConocimientoEmbarque
	 */
	public String getFechaConocimientoEmbarque() {
		return fechaConocimientoEmbarque;
	}
	/**
	 * @param fechaConocimientoEmbarque the fechaConocimientoEmbarque to set
	 */
	public void setFechaConocimientoEmbarque(String fechaConocimientoEmbarque) {
		this.fechaConocimientoEmbarque = fechaConocimientoEmbarque;
	}
	/**
	 * @return the lugarDesembarque
	 */
	public String getLugarDesembarque() {
		return lugarDesembarque;
	}
	/**
	 * @param lugarDesembarque the lugarDesembarque to set
	 */
	public void setLugarDesembarque(String lugarDesembarque) {
		this.lugarDesembarque = lugarDesembarque;
	}
	/**
	 * @return the lugarEmbarque
	 */
	public String getLugarEmbarque() {
		return lugarEmbarque;
	}
	/**
	 * @param lugarEmbarque the lugarEmbarque to set
	 */
	public void setLugarEmbarque(String lugarEmbarque) {
		this.lugarEmbarque = lugarEmbarque;
	}
	/**
	 * @return the numeroConocimientoMaestro
	 */
	public String getNumeroConocimientoMaestro() {
		return numeroConocimientoMaestro;
	}
	/**
	 * @param numeroConocimientoMaestro the numeroConocimientoMaestro to set
	 */
	public void setNumeroConocimientoMaestro(String numeroConocimientoMaestro) {
		this.numeroConocimientoMaestro = numeroConocimientoMaestro;
	}
	/**
	 * @return the numeroDocumentoEmbarque
	 */
	public String getNumeroDocumentoEmbarque() {
		return numeroDocumentoEmbarque;
	}
	/**
	 * @param numeroDocumentoEmbarque the numeroDocumentoEmbarque to set
	 */
	public void setNumeroDocumentoEmbarque(String numeroDocumentoEmbarque) {
		this.numeroDocumentoEmbarque = numeroDocumentoEmbarque;
	}
	/**
	 * @return the pesoBruto
	 */
	public double getPesoBruto() {
		return pesoBruto;
	}
	/**
	 * @param pesoBruto the pesoBruto to set
	 */
	public void setPesoBruto(double pesoBruto) {
		this.pesoBruto = pesoBruto;
	}
	/**
	 * @return the pesoBrutoTotal
	 */
	public double getPesoBrutoTotal() {
		return pesoBrutoTotal;
	}
	/**
	 * @param pesoBrutoTotal the pesoBrutoTotal to set
	 */
	public void setPesoBrutoTotal(double pesoBrutoTotal) {
		this.pesoBrutoTotal = pesoBrutoTotal;
	}
	/**
	 * @return the tipoEmbarque
	 */
	public String getTipoEmbarque() {
		return tipoEmbarque;
	}
	/**
	 * @param tipoEmbarque the tipoEmbarque to set
	 */
	public void setTipoEmbarque(String tipoEmbarque) {
		this.tipoEmbarque = tipoEmbarque;
	} 
	
	
	 

}
