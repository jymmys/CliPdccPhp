/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;



/**
 * @author ytorregl
 *
 */
public class ConocimientoEmbarque {
	
	private String numeroDocumentoEmbarque;
	private String fechaConocimientoEmbarque;
	private double cantidadTotal;
	private double pesoBrutoManifestado;
	private double pesoBrutoTotalCargado;
	private String numeroConocimientoEmbarqueMaster;
	private String tipoEmpaque;
	private String consignatario;
	private String direccionConsignatario;
	private String exportador;
	private String direccion;
	private String lugarEmbarque;
	private String lugarDesembarque;
	/**
	 * 
	 */
	public ConocimientoEmbarque() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroDocumentoEmbarque
	 * @param fechaConocimientoEmbarque
	 * @param cantidadTotal
	 * @param pesoBrutoManifestado
	 * @param pesoBrutoTotalCargado
	 * @param numeroConocimientoEmbarqueMaster
	 * @param tipoEmpaque
	 * @param consignatario
	 * @param direccionConsignatario
	 * @param exportador
	 * @param direccion
	 * @param lugarEmbarque
	 * @param lugarDesembarque
	 */
	public ConocimientoEmbarque(String numeroDocumentoEmbarque, String fechaConocimientoEmbarque, double cantidadTotal,
			double pesoBrutoManifestado, double pesoBrutoTotalCargado, String numeroConocimientoEmbarqueMaster,
			String tipoEmpaque, String consignatario, String direccionConsignatario, String exportador,
			String direccion, String lugarEmbarque, String lugarDesembarque) {
		super();
		this.numeroDocumentoEmbarque = numeroDocumentoEmbarque;
		this.fechaConocimientoEmbarque = fechaConocimientoEmbarque;
		this.cantidadTotal = cantidadTotal;
		this.pesoBrutoManifestado = pesoBrutoManifestado;
		this.pesoBrutoTotalCargado = pesoBrutoTotalCargado;
		this.numeroConocimientoEmbarqueMaster = numeroConocimientoEmbarqueMaster;
		this.tipoEmpaque = tipoEmpaque;
		this.consignatario = consignatario;
		this.direccionConsignatario = direccionConsignatario;
		this.exportador = exportador;
		this.direccion = direccion;
		this.lugarEmbarque = lugarEmbarque;
		this.lugarDesembarque = lugarDesembarque;
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
	 * @return the cantidadTotal
	 */
	public double getCantidadTotal() {
		return cantidadTotal;
	}
	/**
	 * @param cantidadTotal the cantidadTotal to set
	 */
	public void setCantidadTotal(double cantidadTotal) {
		this.cantidadTotal = cantidadTotal;
	}
	/**
	 * @return the pesoBrutoManifestado
	 */
	public double getPesoBrutoManifestado() {
		return pesoBrutoManifestado;
	}
	/**
	 * @param pesoBrutoManifestado the pesoBrutoManifestado to set
	 */
	public void setPesoBrutoManifestado(double pesoBrutoManifestado) {
		this.pesoBrutoManifestado = pesoBrutoManifestado;
	}
	/**
	 * @return the pesoBrutoTotalCargado
	 */
	public double getPesoBrutoTotalCargado() {
		return pesoBrutoTotalCargado;
	}
	/**
	 * @param pesoBrutoTotalCargado the pesoBrutoTotalCargado to set
	 */
	public void setPesoBrutoTotalCargado(double pesoBrutoTotalCargado) {
		this.pesoBrutoTotalCargado = pesoBrutoTotalCargado;
	}
	/**
	 * @return the numeroConocimientoEmbarqueMaster
	 */
	public String getNumeroConocimientoEmbarqueMaster() {
		return numeroConocimientoEmbarqueMaster;
	}
	/**
	 * @param numeroConocimientoEmbarqueMaster the numeroConocimientoEmbarqueMaster to set
	 */
	public void setNumeroConocimientoEmbarqueMaster(String numeroConocimientoEmbarqueMaster) {
		this.numeroConocimientoEmbarqueMaster = numeroConocimientoEmbarqueMaster;
	}
	/**
	 * @return the tipoEmpaque
	 */
	public String getTipoEmpaque() {
		return tipoEmpaque;
	}
	/**
	 * @param tipoEmpaque the tipoEmpaque to set
	 */
	public void setTipoEmpaque(String tipoEmpaque) {
		this.tipoEmpaque = tipoEmpaque;
	}
	/**
	 * @return the consignatario
	 */
	public String getConsignatario() {
		return consignatario;
	}
	/**
	 * @param consignatario the consignatario to set
	 */
	public void setConsignatario(String consignatario) {
		this.consignatario = consignatario;
	}
	/**
	 * @return the direccionConsignatario
	 */
	public String getDireccionConsignatario() {
		return direccionConsignatario;
	}
	/**
	 * @param direccionConsignatario the direccionConsignatario to set
	 */
	public void setDireccionConsignatario(String direccionConsignatario) {
		this.direccionConsignatario = direccionConsignatario;
	}
	/**
	 * @return the exportador
	 */
	public String getExportador() {
		return exportador;
	}
	/**
	 * @param exportador the exportador to set
	 */
	public void setExportador(String exportador) {
		this.exportador = exportador;
	}
	/**
	 * @return the direccion
	 */
	public String getDireccion() {
		return direccion;
	}
	/**
	 * @param direccion the direccion to set
	 */
	public void setDireccion(String direccion) {
		this.direccion = direccion;
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
	
	
	
	

}
